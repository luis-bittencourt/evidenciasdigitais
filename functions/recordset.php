<?php
/*
		Módulo de funções de registros em banco de dados

	1. SQL_INJECTION ( STRING , ORDEM )
		Recebe uma string e aplica hashes para evitar SQL Injections.
		Por padrão essa função remove " (aspa dupla) do texto e expressões de SQL
	
		:: $f_ordem = 1 -> adiciona slashes [DEFAULT]
		:: $f_ordem = 2 -> remove slashes

	2. FASTSELECT - FUNÇÃO PARA SELECIONAR DADOS
		Recebe: $f_colunas  = Colunas que serão selecionadas nas tabelas
				$f_tabela   = Tabelas que serão consultadas
				$f_condicao = cláusula WHERE a ser executada
				$f_ordem    = ORDER BY a ser executado

		Retorna: Array multidimensional com o resultado da pesquisa				

	3. CHECKBOX - FUNÇÃO QUE RECEBE UM VALOR E ROTORNA UMA MATRIZ COM AS POSIÇOES QUANDO O VALOR RECEBIDO FOR 'T'
		Recebe: $f_valor	= Pode ser 'T' ou 'F'
		Retorna: 	[1] => checked
					[2] => checked='checked' 
					[3] => x

	4. SIZEFILE - FUNÇÃO QUE RETORNA O TAMANHO DE UM ARQUIVO, DE MODO FORMATADO
		Recebe:	tamanho do arquivo (via filesize)
		Retorna: 99 B/KB/MB/GB/TB

	5. VALIDATE - FUNÇÃO QUE RECEBE UMA LISTA DE CAMPOS E TESTA A CONSISTENCIA
		Os dados são recebidos na variavel de função $f_campos no mesmo formato do JSON => chave:valor
		A função quebra o campo e testa se o tamanho dos campos. Se houve erro, retorna FALSE	

	6. JSON - FUNÇÃO QUE RECEBE UM ARRAY E RETORNA UMA STRING EM FORMATO JSON
		PARAMETROS:	$f_array	-> Required	-> Matriz contendo diversos valores
		RETORNO:	STRING contendo um par de valores CHAVE : VALOR
		
	*/

#1
function sql_injection($f_string, $f_ordem=1) {
	
	#array de codigos que serão removidos
	$array_slashes = array('"', 'DELETE', 'INSERT', 'INNER', 'JOIN', 'UNION', 'CREATE', 'DROP', 'TRUNCATE', 'TABLE', "'", '– ', '— ');

	#remove codigos
	$f_string = str_replace($array_slashes, '', $f_string);

	/*
	if($f_ordem==1) {
		return addslashes($f_string);
	} else {
		return stripslashes($f_string);
	} */
	return $f_string;
	
}

#2
function FastSelect($f_colunas, $f_tabela, $f_condicao="", $f_ordem="", $f_conexao="") {

	include("connection.php");
	
	if($f_colunas=="" || $f_tabela =="") {
		return "ERRO";
	} else {

		if(is_array($f_colunas)) {
			// Corre o array das colunas e monta uma string
			foreach ($f_colunas as $coluna) {
				$s_colunas .= $coluna . ",";
			}
			$s_colunas = substr($s_colunas, 0, -1);
		} else {
			$s_colunas = $f_colunas;
		}	
	}
	
	$f_query = "SELECT " . $s_colunas . " FROM " . $f_tabela;
	
	if($f_condicao!="") { $f_query .= " WHERE " . $f_condicao; } 	// CLAUSULA WHERE
	if($f_ordem!="") { $f_query .= " ORDER BY " . $f_ordem; }		// CLAUSULA ORDER BY
	
	#executa consulta
	if ($f_conexao=="") {
		$resource_FastSelect = $con->query($f_query);
	} else {
		$resource_FastSelect = $f_con->query($f_query);
	}
	
	if($resource_FastSelect) {
		$array_resourceFastSelect = $resource_FastSelect->fetchAll(PDO::FETCH_ASSOC);
	}
		return $array_resourceFastSelect;
		
}

#3
function checkbox($f_valor, $f_text="") {
	$f_Checked[0] = $f_valor;	

	if($f_valor=='T'){
		$f_Checked[1] = "true";
		$f_Checked[2] = "checked='checked'";
		$f_Checked[3] = "x";
	} else {
		$f_Checked[1] = "";
		$f_Checked[2] = "";
		$f_Checked[3] = "";
	}
	
	//testa se retorna como array ou text
	if($f_text != "") {
		return $f_Checked[1];
	} else {
		return $f_Checked;
	}
}

#4
function sizeFile($f_bytes, $f_precision = 2) { 
   	$f_units = array('B', 'KB', 'MB', 'GB', 'TB'); 
  
    $f_bytes = max($f_bytes, 0); 
   	$f_pow = floor(($f_bytes ? log($f_bytes) : 0) / log(1024)); 
    $f_pow = min($f_pow, count($f_units) - 1); 
   
   	$f_bytes /= pow(1024, $f_pow); 
   
    return round($f_bytes, $f_precision) . ' ' . $f_units[$f_pow]; 
}

#5
function validate($f_campos) {

	$result = TRUE;

	if(is_array($f_campos)) {
		foreach($f_campos as $campo) {

			$campo_1 = explode(":",$campo);
			
			if(strlen($campo_1[1]) == 0) {			//em branco
				$result = FALSE;
			} 
			
			if ($campo_1[0] == "numeric") {			//numeros
				if ( !is_numeric($campo_1[1]) ) {
					$result = FALSE;
				}
			} else if ($campo_1[0] == "email") {
				if (!eregi("^[-_a-z0-9]+(\\.[-_a-z0-9]+)*\\@([-a-z0-9]+\\.)*([a-z]{2,4})$", $campo_1[1])) {
					$result = FALSE;
				}
			} else if ($campo_1[0] == "today") {			//data
				if ( str_replace('-', '', format_date($campo_1[1], "Ymd")) > date("Ymd") ) {
					$result = FALSE;
				}
			}
		}
	} else {
		$campo_1 = explode(":",$campo);
		
		if(strlen($campo_1[1]) == 0) {
			$result = FALSE;
		}
	}

	return $result;
}


function JSON($f_array) {

	#se o valor recebido não for uma ARRAY, retorna erro
	if( !is_array($f_array) ) {
		die("Erro ao conectar com o servidor. JSON INVALID ARRAY ERROR");	
	}
	
	$f_json = "";
	#percorre toda a matriz recebida e separa as chaves e os valores
	foreach ($f_array as $f_fs) { if( is_array($f_fs) ) {
	
		$f_keys   = array_keys($f_fs);
		$f_values = array_values($f_fs);

		#percorre as chaves para criar a string com o par CHAVE : VALOR
		$f_json .= "({ ";
		foreach ($f_keys as $f_key) {
			$f_json .= " '$f_key' : '" . current($f_values) . "', ";
			next($f_values);
		}
		$f_json = substr($f_json,0, -2) . " })";
	}}
	
	return $f_json;
}


?>