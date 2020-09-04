<?php
//Coloca a data por extenso e em portugues.
function DiaHoje(){
//dia atual
$dia=date("l");
switch($dia)
{
case "Monday":
$dia_port = "segunda-feira";
break; 
case "Tuesday":
$dia_port = "terça-feira";
break; 
case "Wednesday":
$dia_port = "quarta-feira";
break; 
case "Thursday":
$dia_port = "quinta-feira";
break; 
case "Friday":
$dia_port = "sexta-feira";
break; 
case "Saturday":
$dia_port = "sábado";
break; 
case "Sunday":
$dia_port = "domingo";
break; 
}
$mes = date("n");
switch($mes) 
{
case "1":
$mes_port = "janeiro";
break; 
case "2":
$mes_port = "fevereiro";
break; 
case "3":
$mes_port = "março";
break; 
case "4":
$mes_port = "abril";
break; 
case "5":
$mes_port = "maio";
break; 
case "6":
$mes_port = "junho";
break; 
case "7":
$mes_port = "julho";
break; 
case "8":
$mes_port = "agosto";
break; 
case "9":
$mes_port = "setembro";
break; 
case "10":
$mes_port = "outubro";
break; 
case "11":
$mes_port = "novembro";
break; 
case "12":
$mes_port = "dezembro";
break; 
}
echo ($dia_port); 
echo (", ");
echo (date("d"));
echo (" de ");
echo ($mes_port); 
echo (" de ");
echo (date("Y"));
}

//Informa a turno do dia.
function turno_dia(){
			$hora = date("H");
			if ($hora >= 0 && $hora <6){
			echo "Boa madrugada, ";
			} elseif ($hora >= 6 && $hora < 12){
			echo "Bom dia, ";
			} elseif ($hora >= 12 && $hora < 18) {
			echo "Boa tarde, ";
			} else {
			echo "Boa noite, ";
			}		
}

//Capturar o IP e dados do visitante para relatório
function dados(){
$IP=$_SERVER['REMOTE_ADDR']; // aki ele pega o ip propriamente dito
echo $IP;
$str=";";
$str1=",";
$data=date("d-m-Y,H:i:s");
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$navegador = $_SERVER['HTTP_USER_AGENT']; 
$fp=fopen("pega_dados.txt","a");
fwrite($fp, $data);
fwrite($fp, $str1);
fwrite($fp, $IP);
fwrite($fp, $str1);
fwrite($fp, $hostname);
fwrite($fp, $str1);
fwrite($fp, $navegador);
fwrite($fp, "$str\r\n");
fclose($fp);
}

//Reverte as datas do formato americano (MySQL) para o padrão brasileiro.
function reverte_data($data){
	$data_nova = implode(preg_match("~\/~", $data) == 0 ? "/" : "-", array_reverse(explode(preg_match("~\/~", $data) == 0 ? "-" : "/", $data)));
	return $data_nova;
}

//Capturar a data atual.
function data_hoje(){
	
	$dthoje=date("d-m-Y");
	echo "$dthoje";

}

//Capturar o ano atual.
function pega_ano(){
		$ano=date("Y");
		echo $ano;
}

//Criar a função para contar os visitantes do site (contador de acessos)
function contador(){
		$arq="cont.txt";
		$cont=0;
		$fp=fopen($arq,"r");
		$cont=fgets($fp);
		fclose($fp);
		++$cont;
		$fp=fopen($arq,"w+");
		fwrite($fp,$cont);
		fclose($fp);
		echo $cont;
}

//função para retirar acentos das palavras
//STR ( TEXTO, UPPER::LOWER )
//		Função para converter MAIUSCULO/minusculo sem perder os acentos

function str($f_expressao, $f_tipo) { 
	
	$a_upper = "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖ×ØÙÜÚÞß";
	$a_lower = "àáâãäåæçèéêëìíîïðñòóôõö÷øùüúþÿ";

    //caracteres em maiusculo
	if($f_tipo == UPPER) {
		$f_palavra = strtr(strtoupper($f_expressao), $a_lower, $a_upper); 
	} 

	//caracteres em formato UTF-8	
	if($f_tipo == 'UTF-8' ) {
		$f_palavra = iconv('ISO-8859-1', 'UTF-8', $f_expressao);
	} 

	//se não for passado nenhum valor, converte em letras minusculas
	if($f_tipo == LOWER) {
		$f_palavra = strtr(strtolower($f_expressao), $a_upper, $a_lower);
	}
	
    //retira acentos
	if($f_tipo == ACENTOS) {

		$acentos = array(
		'A' => '/&Agrave;|&Aacute;|&Acirc;|&Atilde;|&Auml;|&Aring;/',
		'a' => '/&agrave;|&aacute;|&acirc;|&atilde;|&auml;|&aring;/',
		'C' => '/&Ccedil;/',
		'c' => '/&ccedil;/',
		'E' => '/&Egrave;|&Eacute;|&Ecirc;|&Euml;/',
		'e' => '/&egrave;|&eacute;|&ecirc;|&euml;/',
		'I' => '/&Igrave;|&Iacute;|&Icirc;|&Iuml;/',
		'i' => '/&igrave;|&iacute;|&icirc;|&iuml;/',
		'N' => '/&Ntilde;/',
		'n' => '/&ntilde;/',
		'O' => '/&Ograve;|&Oacute;|&Ocirc;|&Otilde;|&Ouml;/',
		'o' => '/&ograve;|&oacute;|&ocirc;|&otilde;|&ouml;/',
		'U' => '/&Ugrave;|&Uacute;|&Ucirc;|&Uuml;/',
		'u' => '/&ugrave;|&uacute;|&ucirc;|&uuml;/',
		'Y' => '/&Yacute;/',
		'y' => '/&yacute;|&yuml;/',
		'a.' => '/&ordf;/',
		'o.' => '/&ordm;/');

		 
		 $f_palavra = preg_replace($acentos, array_keys($acentos), htmlentities($f_expressao,ENT_NOQUOTES, 'UTF-8'));
	} 

    //retira espaços em branco
	if($f_tipo == TRIM) {

		 $f_palavra = str_replace(" ", "", $f_expressao);
	} 


    return $f_palavra;
}


//FUNÇÃO USADA PARA A VALIDAÇÃO DE CPF
function validaCPF($cpf){
	
	// Verifica se um número foi informado
	if(empty($cpf) || $cpf == "") {
		return false;
	}

	// Elimina possivel mascara
	$cpf = preg_replace("/[^0-9]/", "", $cpf);
	$cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
	
	// Verifica se o numero de digitos informados é igual a 11 
	if (strlen($cpf) != 11) {
		return false;
	}
	// Verifica se nenhuma das sequências invalidas abaixo 
	// foi digitada. Caso afirmativo, retorna falso
	else if ($cpf == '00000000000' || 
				$cpf == '11111111111' || 
				$cpf == '22222222222' || 
				$cpf == '33333333333' || 
				$cpf == '44444444444' || 
				$cpf == '55555555555' || 
				$cpf == '66666666666' || 
				$cpf == '77777777777' || 
				$cpf == '88888888888' || 
				$cpf == '99999999999') {
		return false;
	 // Calcula os digitos verificadores para verificar se o
	 // CPF é válido
	 } else {   
		
		for ($t = 9; $t < 11; $t++) {
			
			for ($d = 0, $c = 0; $c < $t; $c++) {
				$d += $cpf{$c} * (($t + 1) - $c);
			}
			$d = ((10 * $d) % 11) % 10;
			if ($cpf{$c} != $d) {
				return false;
			}
		}

		return true;
	}
	
}

function validaCNPJ($cnpj){
	
			//Etapa 1: Cria um array com apenas os digitos numéricos, isso permite receber o cnpj em diferentes formatos como "00.000.000/0000-00", "00000000000000", "00 000 000 0000 00" etc...
			$j=0;
			for($i=0; $i<(strlen($cnpj)); $i++)
				{
					if(is_numeric($cnpj[$i]))
						{
							$num[$j]=$cnpj[$i];
							$j++;
						}
				}
			//Etapa 2: Conta os dígitos, um Cnpj válido possui 14 dígitos numéricos.
			if(count($num)!=14)
				{
					$isCnpjValid=false;
				}
			//Etapa 3: O número 00000000000 embora não seja um cnpj real resultaria um cnpj válido após o calculo dos dígitos verificares e por isso precisa ser filtradas nesta etapa.
			if ($num[0]==0 && $num[1]==0 && $num[2]==0 && $num[3]==0 && $num[4]==0 && $num[5]==0 && $num[6]==0 && $num[7]==0 && $num[8]==0 && $num[9]==0 && $num[10]==0 && $num[11]==0)
				{
					$isCnpjValid=false;
				}
			//Etapa 4: Calcula e compara o primeiro dígito verificador.
			else
				{
					$j=5;
					for($i=0; $i<4; $i++)
						{
							$multiplica[$i]=$num[$i]*$j;
							$j--;
						}
					$soma = array_sum($multiplica);
					$j=9;
					for($i=4; $i<12; $i++)
						{
							$multiplica[$i]=$num[$i]*$j;
							$j--;
						}
					$soma = array_sum($multiplica);	
					$resto = $soma%11;			
					if($resto<2)
						{
							$dg=0;
						}
					else
						{
							$dg=11-$resto;
						}
					if($dg!=$num[12])
						{
							$isCnpjValid=false;
						} 
				}
			//Etapa 5: Calcula e compara o segundo dígito verificador.
			if(!isset($isCnpjValid))
				{
					$j=6;
					for($i=0; $i<5; $i++)
						{
							$multiplica[$i]=$num[$i]*$j;
							$j--;
						}
					$soma = array_sum($multiplica);
					$j=9;
					for($i=5; $i<13; $i++)
						{
							$multiplica[$i]=$num[$i]*$j;
							$j--;
						}
					$soma = array_sum($multiplica);	
					$resto = $soma%11;			
					if($resto<2)
						{
							$dg=0;
						}
					else
						{
							$dg=11-$resto;
						}
					if($dg!=$num[13])
						{
							$isCnpjValid=false;
						}
					else
						{
							$isCnpjValid=true;
						}
				}
			//Trecho usado para depurar erros.
			/*
			if($isCnpjValid==true)
				{
					echo "<p><font color="GREEN">Cnpj é Válido</font></p>";
				}
			if($isCnpjValid==false)
				{
					echo "<p><font color="RED">Cnpj Inválido</font></p>";
				}
			*/
			//Etapa 6: Retorna o Resultado em um valor booleano.
			return $isCnpjValid;	
			
}


?>
