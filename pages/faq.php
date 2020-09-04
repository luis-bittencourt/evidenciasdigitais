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
					<h2 class=""><b><?php echo utf8_encode("ESCLAREÇA SUAS DÚVIDAS:");?></b></h2>
					
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
						   <?php echo utf8_encode("<p>Evidências Digitais é um serviço de divulgação, treinamento e produção de conteúdo necessário ao esclarecimento de fatos e eventos, referente a navegação na internet.</p>");?>
							
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
						   <?php echo utf8_encode("<p>Nossa proposta é a de desmistificar as coisa da internet, produzindo conteúdos e realizando treinamentos com o foco em ajudarmos as pessoas a navegarem na web com segurança.</p>");?>
							
						  </div>
						</div>
					  </div>
					  
					  
					  <div class="card">
						<div class="card-header" id="heading3">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
							   <?php echo utf8_encode("<p> #3 QUAIS SÃO OS OBJETIVOS DA INICIATIVA EVIDÊNCIAS DIGITAIS?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordionExample">
						  <div class="card-body text-faq">
						   <?php echo utf8_encode("<p>Temos por objetivo o esclarecimento do universo digital, abordando temas que propiciem o aprendizado sobre as melhores práticas de uso da internet. Somente conhecendo suas características, é possível vislumbrar os perigos existentes e consequentemente o entendimento aos riscos que todos estamos expostos.</p>");?>
							
						  </div>
						</div>
					  </div>
					  
					  <div class="card">
						<div class="card-header" id="heading4">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
							  <?php echo utf8_encode("<p>#4  QUAIS SÃO OS TRABALHOS OFERECIDOS?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
						  <div class="card-body text-faq">
						  <?php echo utf8_encode("<p>Desenvolvemos análises e divulgamos estatísticas desenvolvidas por órgãos oficiais e de empresas especializadas em segurança da informação. Procuramos apresentar mapas estratégicos, infográficos e todos os recursos que possibilitem um diagnóstico dos acontecimentos no Brasil e no mundo.</p>");?>
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
						   <?php echo utf8_encode("<p> Na seção FERRAMENTAS (situada logo abaixo de NOSSA COMUNIDADE) estão relacionados manuais, ferramentas e legislações facilitadoras ao entendimentos das coisas da internet:</p>
						                           <ul style='font-size:0.8em;'>
												       <li> <b>Manuais:    </b> documentos julgados úteis para esclarecimentos sobre o tema proposto. Todos os itens disponibilizados são de livre distribuição, fornecidos em treinamentos, eventos ou simplesmente localizados na web.</li>
													   <li> <b>Ferramentas:</b> conjunto de ferramentas de terceiros, voltadas para análise estatística, mapas de relevância e obtenção de dados úteis sobre registros de domínio, rastreio de e-mail, entre outros.</li>
													   <li> <b>Legislações:</b> relação de links para as principais leis que regem o uso da internet no Brasil. </li>
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
							<?php echo utf8_encode("<p> Todos estão convidados a participarem desta iniciativa. Atualmente temos três formas de participação: </p>
							                        <ul style='font-size:0.8em;'>
														<li>Através da divulgação de nossos canais de comunicação;</li>
														<li>Preenchendo nossa pesquisa sobre o perfil dos usuários da internet e problemas decorrentes. Pode ser acessada, clicando <a href='https://forms.gle/sdrhNp3mENy1nBX37' target='_blank' title='Pesquisa qualitativa sobre seguranca na internet.'> AQUI </a>;</li>
														<li>Outra forma é a inscrição para o recebimento de nossa newsletter gratuita e on-line, objetivando detalhar os dados apresentados.</li>
													</ul>");?>
						  </div>
						</div>
					  </div>
					  
					  
					   <div class="card">
						<div class="card-header" id="heading7">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
							  <?php echo utf8_encode("<p> #7 POSSO FAZER DENÚNCIAS POR AQUI?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
						  <div class="card-body text-faq">
							<?php echo utf8_encode("<p> Não. Apenas divulgamos conhecimentos para melhorar a segurança ao se navegar na internet. Todo e qualquer problema deve ser comunicado aos órgãos competentes, como <b>Polícia Civil</b> e <b>Federal</b>, <b>Ministério Público</b> ou outro constituído para esta finalidade, como, por exemplo, os <b>Conselhos Tutelares</b>, para as questões envolvendo Criança ou Adolescente. </p>");?>
						  </div>
						</div>
					  </div>
					  
					  <div class="card">
						<div class="card-header" id="heading8">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
							  <?php echo utf8_encode("<p> #8 ENTÃO, ONDE TENHO QUE IR E O QUE PRECISO LEVAR PARA REGISTRAR UMA DENÚNCIA OU BOLETIM DE OCORRÊNCIA?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
						  <div class="card-body text-faq">
							<?php echo utf8_encode("<p> Na seção ORIENTAÇÕES (situada logo abaixo de NOSSA COMUNIDADE) estão relacionadas as orientações básicas sobre preservação de evidência, delegacias especializadas e outras orientações do que fazer para comprovação dos dados a serem denunciados.</p>");?>
						  </div>
						</div>
					  </div>
					  
					  <div class="card">
						<div class="card-header" id="heading9">
						  <h5 class="mb-0">
							<button class="btn btn-link link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
							  <?php echo utf8_encode("<p> #9 AS INFORMAÇÕES ENCONTRADAS AQUI SÃO SUFICIENTES PARA O COMPLETO ESCLARECIMENTO DOS FATOS QUE FUI VÍTIMA?</p>");?>
							</button>
						  </h5>
						</div>
						<div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
						  <div class="card-body text-faq">
							<?php echo utf8_encode("<p>NÃO. Apenas procuramos transparecer as informações básicas sobre os procedimento que qualquer pessoa pode realizar para uma comunicação de crime paraticado pela internet. Para maiores informações, entrar em contato diretamente e o quanto antes com as Polícias Civis, Federal, Conselhos Tutelar e/ou Ministério Público, para maiores orientações.</p>");?>
						  </div>
						</div>
					  </div>
					  
					  
					  
					 
					  
					  
					</div>
			 
		</div> <!-- /container -->	
	</section>
	
	<section id="fale_conosco" class="" style="margin-top:50px;text-align:justify;">
		<div class="container">
			<h5 class=""><b><?php echo utf8_encode("Não encontrou  a resposta que queria? Entre em contato através do e-mail: contatos@evidenciasdigitais.com.br");?></b></h5>
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
