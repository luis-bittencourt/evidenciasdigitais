<?php
	#DESTINA-SE A ABERTURA DA CONEXÃO COM O BANCO PARA TODOS O SISTEMA
	
	#variáveis de conexão
	$db = "bd_3bits";         //nome do banco;
	$db_user = "3bits";     //usuario do bando de dados;
	$db_pass = "jLdmDCR2CWwMftmM";  //senha para acesso ao banco de dados;
	
	try{
		
		#ABRE A CONEXÃO GERAL COM O BANCO DE DADOS MYSQL:3306
		$con = new PDO("mysql:host=localhost:3306;dbname=$db", "$db_user", "$db_pass");
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $e) {
				
				  $vReturnData =  'Error: ' . $e->getMessage();
				  
				}
				
?>