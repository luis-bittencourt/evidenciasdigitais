<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="FAQ, sistema de perguntas frequentes.">
    <meta name="author" content="Luis Fernando da Silva Bittencourt https://www.lfbittencourt.com.br">
    <link rel="icon" href="img/logo.png">
	
	<?php 
		include("../global/global.php");
	?>

   <title> FAQ - Perguntas Frequentes</title>

   <!-- Custom styles for this template -->
	<link rel="stylesheet" href="//cdn.usebootstrap.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!--<link href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"  rel="stylesheet">-->
	
	<script src="//kit.fontawesome.com/ce38887de8.js" crossorigin="anonymous"></script>
	<!--<link href="fontawesome/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">-->
	
	<!--<script src="//code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>-->
    <script src="../js/jquery-3.4.1.min.js"></script>
	
	<!-- Fonts do Google -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		
	<!-- Jquery for system -->
     <script src="../js/pages.js"></script>
	 
	 <!--CSS da pagina-->
	<link href="../css/faq.css" rel="stylesheet">
		 
  </head>

  <body>
  
	<div class="box" title="subir ao inicio da pagina.">
		<span><center> <i class="fas fa-angle-up"></i></center></span>
	</div>
  
	 
	 <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top" >
		 <a class="navbar-brand" href="./"><img src="../img/logo.png" width="45" height="45" class="d-inline-block align-top" alt="">
			<span style='font-size:20px; color:#FFFFFF;'> FAQ - Perguntas Frequentes </span>
		 </a>
		  
		  
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_faq" aria-controls="navbar_faq" aria-expanded="true" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>

      <div class="collapse navbar-collapse" id="navbar_faq">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item dropdown">
					
							 
				</li>
			</ul>
			
			<ul class="navbar-nav navbar-right">
					<li class="nav-item dropdown">
						
						<form class="navbar-form" id="acesso_user_adm">
							<button id="voltar" class="btn btn-outline-success" type="button"><i>voltar</i></button>
						</form> 
					</li>
			</ul>
			
		</div>
	</nav>

   <section id="faq">
		<div id="perguntas_frequentes" class="container secao"  style="margin-top:20vh;">
					<h2 class=""><b><?php echo utf8_encode("ESCLARE�A SUAS D�VIDAS:");?></b></h2>
					
					<div class="accordion" id="accordionExample">
					  <div class="card">
						<div class="card-header" id="heading1">
						  <h5 class="mb-0">
							<button class="btn btn-link link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
							 <?php echo utf8_encode(" <p>#1 QUEM SOMOS?</p>");?>
							</button>
						  </h5>
						</div>

						<div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#accordionExample">
						  <div class="card-body text-faq">
						   <?php echo utf8_encode("<p>Evid�ncias Digitais � um servi�o de divulga��o, treinamento e produ��o de conte�do necess�rio ao esclarecimento de fatos e eventos, referente a navega��o na internet.</p>");?>
							
						  </div>
						</div>
					  </div>
					  
					  
					  <div class="card">
						<div class="card-header" id="heading2">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
							  <?php echo utf8_encode("<p>#2 O QUE FAZEMOS?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordionExample">
						  <div class="card-body text-faq">
						   <?php echo utf8_encode("<p>Nossa proposta � a de desmistificar as coisa da internet, produzindo conte�dos e realizando treinamentos com o foco em ajudarmos as pessoas a navegarem na web com seguran�a.</p>");?>
							
						  </div>
						</div>
					  </div>
					  
					  
					  <div class="card">
						<div class="card-header" id="heading3">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
							   <?php echo utf8_encode("<p> #3 QUAIS S�O OS OBJETIVOS DA INICIATIVA EVID�NCIAS DIGITAIS?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
						  <div class="card-body text-faq">
						   <?php echo utf8_encode("<p>Temos por objetivo o esclarecimento do universo digital, abordando temas que propiciem o aprendizado sobre as melhores pr�ticas de uso da internet. Somente conhecendo suas caracter�sticas, � poss�vel vislumbrar os perigos existentes e consequentemente o entendimento aos riscos que todos estamos expostos.</p>");?>
							
						  </div>
						</div>
					  </div>
					  
					  <div class="card">
						<div class="card-header" id="heading4">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
							  <?php echo utf8_encode("<p>#4  QUAIS S�O OS TRABALHOS OFERECIDOS?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
						  <div class="card-body text-faq">
						  <?php echo utf8_encode("<p>Desenvolvemos an�lises e divulgamos estat�sticas desenvolvidas por �rg�os oficiais e de empresas especializadas em seguran�a da informa��o. Procuramos apresentar mapas estrat�gicos, infogr�ficos e todos os recursos que possibilitem um diagn�stico dos acontecimentos no Brasil e no mundo.</p>");?>
						  </div>
						</div>
					  </div>
					  
					  <div class="card">
						<div class="card-header" id="heading5">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
							 <?php echo utf8_encode("<p> #5 COMO POSSO OBTER MAIS MATERIAIS PARA MELHORAR MEU ENTENDIMENTO REFERENTE AS COISAS DA INTERNET?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
						  <div class="card-body text-faq">
						   <?php echo utf8_encode("<p> Na se��o FERRAMENTAS (situada logo abaixo de NOSSA COMUNIDADE) est�o relacionados manuais, ferramentas e legisla��es facilitadoras ao entendimentos das coisas da internet:</p>
						                           <ul style='font-size:0.8em;'>
												       <li> <b>Manuais:    </b> documentos julgados �teis para esclarecimentos sobre o tema proposto. Todos os itens disponibilizados s�o de livre distribui��o, fornecidos em treinamentos, eventos ou simplesmente localizados na web.</li>
													   <li> <b>Ferramentas:</b> conjunto de ferramentas de terceiros, voltadas para an�lise estat�stica, mapas de relev�ncia e obten��o de dados �teis sobre registros de dom�nio, rastreio de e-mail, entre outros.</li>
													   <li> <b>Legisla��es:</b> rela��o de links para as principais leis que regem o uso da internet no Brasil. </li>
												   </ul>");?>
						  </div>
						</div>
					  </div>
					  
					  <div class="card">
						<div class="card-header" id="heading6">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
							  <?php echo utf8_encode("<p> #6 ACHEI INTERESSANTE. COMO POSSO PARTICIPAR?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
						  <div class="card-body text-faq">
							<?php echo utf8_encode("<p> Todos est�o convidados a participarem desta iniciativa. Atualmente temos tr�s formas de participa��o: </p>
							                        <ul style='font-size:0.8em;'>
														<li>Atrav�s da divulga��o de nossos canais de comunica��o;</li>
														<li>Preenchendo nossa pesquisa sobre o perfil dos usu�rios da internet e problemas decorrentes. Pode ser acessada, clicando <a href='https://forms.gle/sdrhNp3mENy1nBX37' target='_blank' title='Pesquisa qualitativa sobre seguranca na internet.'> AQUI </a>;</li>
														<li>Outra forma � a inscri��o para o recebimento de nossa newsletter gratuita e on-line, objetivando detalhar os dados apresentados.</li>
													</ul>");?>
						  </div>
						</div>
					  </div>
					  
					  
					   <div class="card">
						<div class="card-header" id="heading7">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
							  <?php echo utf8_encode("<p> #7 POSSO FAZER DEN�NCIAS POR AQUI?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
						  <div class="card-body text-faq">
							<?php echo utf8_encode("<p> N�o. Apenas divulgamos conhecimentos para melhorar a seguran�a ao se navegar na internet. Todo e qualquer problema deve ser comunicado aos �rg�os competentes, como <b>Pol�cia Civil</b> e <b>Federal</b>, <b>Minist�rio P�blico</b> ou outro constitu�do para esta finalidade, como, por exemplo, os <b>Conselhos Tutelares</b>, para as quest�es envolvendo Crian�a ou Adolescente. </p>");?>
						  </div>
						</div>
					  </div>
					  
					  <div class="card">
						<div class="card-header" id="heading8">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
							  <?php echo utf8_encode("<p> #8 ENT�O, ONDE TENHO QUE IR E O QUE PRECISO LEVAR PARA REGISTRAR UMA DEN�NCIA OU BOLETIM DE OCORR�NCIA?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
						  <div class="card-body text-faq">
							<?php echo utf8_encode("<p> Na se��o ORIENTA��ES (situada logo abaixo de NOSSA COMUNIDADE) est�o relacionadas as orienta��es b�sicas sobre preserva��o de evid�ncia, delegacias especializadas e outras orienta��es do que fazer para comprova��o dos dados a serem denunciados.</p>");?>
						  </div>
						</div>
					  </div>
					  
					  <div class="card">
						<div class="card-header" id="heading9">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
							  <?php echo utf8_encode("<p> #9 AS INFORMA��ES ENCONTRADAS AQUI S�O SUFICIENTES PARA O COMPLETO ESCLARECIMENTO DOS FATOS QUE FUI V�TIMA?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
						  <div class="card-body text-faq">
							<?php echo utf8_encode("<p>N�O. Apenas procuramos transparecer as informa��es b�sicas sobre os procedimento que qualquer pessoa pode realizar para uma comunica��o de crime paraticado pela internet. Para maiores informa��es, entrar em contato diretamente e o quanto antes com as Pol�cias Civis, Federal, Conselhos Tutelar e/ou Minist�rio P�blico, para maiores orienta��es.</p>");?>
						  </div>
						</div>
					  </div>
					  
					  
					  
					 
					  
					  
					</div>
			 
		</div> <!-- /container -->	
	</section>
	
	<section id="fale_conosco" class="" style="margin-top:50px;text-align:justify;">
		<div class="container">
			<h5 class=""><b><?php echo utf8_encode("N�o encontrou  a resposta que queria? Entre em contato atrav�s do e-mail: contatos@evidenciasdigitais.com.br");?></b></h5>
			<br/>
			<div  id="form_fale_conosco" class="" >
				
				
			</div> 
		</div>
	</section>
	
	
	<br/><br/>
        <section id="footer">
         
			<footer class="footer" style="">
					  <div class="container">
					  
					  <!--<center><a class="link rede_social" href="#" ><i class="fab fa-facebook"></i></a>  |  <a class="link rede_social" href="#"><i class="fab fa-instagram"></i></a>  |  <a class="link rede_social" href="#"><i class="fab fa-pinterest"></i></a></center>-->
					   
					  
					  <!--<center><a class="link" href="faq.php" ><i>perguntas frequentes</i></a></center>
					  <center> <spam class="sombrear" style="color:#FFFFFF; ">visitas ao site: <?php //contador(); ?> | seu IP: <?php //dados(); ?></spam></center>-->
					  <hr/>
					  <center> <spam class="mt-5 mb-3 text-muted text-center sombrear"> <a href="https://www.evidenciasdigitais.com.br">&copy; Evidencias Digitais - <?php echo $ano = date("Y"); ?></a> 
					  </br> TODOS OS DIREITOS RESERVADOS</p>
					  </div> 
			</footer>
			
	</section>

	
    <!-- Bootstrap core JavaScript
    ================================================== -->
		<!--<script>window.jQuery || document.write('<script src="//code.jquery.com/jquery-3.5.0.js"><\/script>')</script>
		<script src="//code.jquery.com/jquery-3.5.0.js"></script>-->
		<script>window.jQuery || document.write('<script src="../js/jquery-3.4.1.min.js""><\/script>')</script>
		<script src="../js/jquery-3.4.1.min.js" ></script>
		
		<script src="//cdn.usebootstrap.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<!--<link href="bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js">--> 
   
  </body>
</html>
