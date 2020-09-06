<?php include("global/global.php");?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
    <meta name="author" content="Luis Fernando da Silva Bittencourt https://www.lfbittencourt.com.br">
	<meta name="keywords" content=" CRIMES NA INTERNET, CRIME DIGITAL, INVESTIGAÇÃO E PREVENÇÃO, CYBERCRIME, CIBERCRIME, CYBERSECURITY, PHISHING ">
	<meta name="application-name" content="Evidencias Digitais:site">
	<meta name="description" content="Produção de conteúdo digital para treinamentos on-line: prevenção e investigação de crimes praticados pela internet (cybercrimes, phishing e pragas virtuais).">
	  
    <link rel="icon" href="img/logo.png" width="30px">	
    <title id="TITULO_PAGINA"> Evidencias Digitais </title>
	
	
	<!-- Jquery for system 	 
	<script src="//code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>-->
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/controle.js"></script> 
	
    <!-- Bootstrap core CSS -->	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- <link href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"  rel="stylesheet">-->
	
	<!-- MAIL CHIMP -->
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
	
	<!-- Fonts do Google -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	
	<!-- Icones Awesome -->
	<script src="//kit.fontawesome.com/ce38887de8.js" crossorigin="anonymous"></script>
	<!--<link href="fontawesome/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">-->
	
	<!-- CSS DO TEMPLATE -->
	<link href="css/estilo_2.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	 
  </head>

  <body>
  
	<!-- BARRA_SUPERIOR (CONTATOS) -->
	<div id="div_aviso_cookie"></div>
	<div id="div_sobe_pagina" ></div>
	
	
		<div id="div_barra" class="div_barra" style="display:block;"> 
			<div id="div_barra_esquerda" class="div-left"> <span id=""> </i> </span> </div>
			<div id="div_barra_direita" class="div-right"> 
					<input type="hidden" id="CODIGO_PROJETO" name="CODIGO_PROJETO">
			        <span id="R_SOCIAL"> <a class="link social" href="//www.facebook.com/evidenciasdigitais" target="__blank" ><i class="fab fa-facebook"></i></a>  |  <a class="link social" href="//www.instagram.com/evidenciasdigitais" target="__blank"><i class="fab fa-instagram"></i></a>  |  <a class="link social" href="//www.linkedin.com/in/lfsbittencourt" target="__blank"><i class="fab fa-linkedin"></i></a> </span> 
			</div>
		</div>
		
		<!-- BANNER (CABEÇALHO) DA PÁGINA -->		
		<div id="div_cabecalho" style="display:block;">
		
			<div id="logo"><img src="img/logo.png" width="" height="" class="" alt="logo evidencias digitais"></div>
			<div id="TITULO"> <h1><?php echo utf8_encode("EVIDÊNCIAS DIGITAIS");?> </h1> </div>
			<div id="SUBTITULO"> <h2> <?php echo utf8_encode("Produção de conteúdos, materiais e ferramentas digitais, para treinamentos voltados à segurança da informação");?></h2> </div>
			
			<center><div id='cta' href='#show' class='btn-cta'>SAIBA MAIS</div></center>
			
		</div>
		
		<!-- MENU DE NAVEGAÇÃO -->		
		<input type="checkbox" id="menu-hamburger">
		<label for="menu-hamburger">
		<div id="div_menu" class="menu">
			<span class="hamburger"></span>
		</div>
		</label>
		
		<nav  class="menu-nav">
			<ul>
					  
				<li class="nav-item">
					<a class="nav-link" href="#div_cabecalho"><?php echo utf8_encode("INÍCIO");?></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#show"><?php echo utf8_encode("APRESENTAÇÃO");?></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#valores">VALORES</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="#analises"><?php echo utf8_encode("ANÁLISES & PROJEÇÕES");?></a>
				</li>
					  
				<li class="nav-item">
					<a class="nav-link" href="#ebooks"><?php echo utf8_encode("TRABALHOS");?></a>
				</li>
					
				<li class="nav-item">
					<a class="nav-link" href="#quem_somos">QUEM SOMOS</a>
				</li>
					
				<li class="nav-item">
					<a class="nav-link" href="#nossa_comunidade">NOSSA COMUNIDADE</a>
				</li>
					
				<li class="nav-item">
					<a class="nav-link" href="#blog">FALE CONOSCO</a>
				</li>			  
						
					
			</ul>
		
		</nav>
	
	
	<div id="div_sections" class="setores_pagina bloco" style="display:block;">
		
	 	<!-- APRESENTAÇÃO -->
		<section id="show" style="display:block;">
			
			<div class="quadro_textos anime_left adaptavel">
				<div class="imagem_div" > <i class="fas fa-globe-americas"></i> <br> <h2><?php echo utf8_encode("APRESENTAÇÃO");?></h2></div>
				<div id="APRESENTACAO_SITE">  </div>
				<br>
				<center><a href='#valores' type="button" class="btn btn-outline-primary btn-lg">saiba mais</a></center>
			</div>

		</section>
		
		<!-- VALORES DA EMPRESA -->
		<section id="valores" class="container">
		
			<div id="cards">
				  <!-- Example row of columns -->
				  <div class="card-deck row">	
						<div class="card col-md-4">
						<div class="imagem_div">
						 <center><i class="fas fa-bullhorn"></i></center>
						  <center><h2 class="card-title"><b><?php echo utf8_encode("Missão");?></b></h2></center>
						</div>
						 <p class="card-text texto-responsivo" align="justify"><?php echo utf8_encode("Poder se orgulhar em fazer o bem, transmitindo <b>segurança</b> e <b>tranquilidade</b> para uma internet mais humana e menos virtual. Ser </b>feliz</b> acima de tudo.");?></p>
						 <p></p><br> 
						</div>						
						
						<div class=" card col-md-4">
							<div class="imagem_div">
								<center><i class="far fa-eye"></i></center>
								<center><h2 class="card-title"><b><?php echo utf8_encode("Visão");?></b></h2></center>
							</div>
						 <p class="card-text texto-responsivo" align="justify"><?php echo utf8_encode("No prazo de até cinco anos, ser referência na produção e transmissão de conhecimentos <b>relevantes</b> necessários para prover a tranquilidade de uma navegação <b>segura</b> na <b>internet</b>.");?> </p>
						 <p></p><br> 
					   </div>
					   
						<div class="card col-md-4">
							<div class="imagem_div">
								<center><i class="fas fa-bullseye"></i></center>
								<center><h2 class="card-title"><b><?php echo utf8_encode("Objetivos");?></b></h2></center>
							</div>
						  <p class="card-text texto-responsivo" align="justify"><?php echo utf8_encode("Educar e conscientizar de forma harmoniosa os usuários da <b>internet</b>, com a produção de <b>materiais</b>, <b>cursos</b> e <b>treinamentos</b> voltados à <b>segurança da informação</b>.");?></p>
						  <p></p><br>
						</div>
					
				  </div>
			</div>
		</section>
		
		<!--SOLICITA PARTICIPAÇÃO NA PESQUISA-->
		<div id="mensagem-apoio">
	
			<?php echo utf8_encode("<h3>PARTICIPE DE NOSSA PESQUISA: <spam style=''> NOS AJUDE A ENTENDER OS RISCOS OCULTOS NA INTERNET!<spam></h3>
			                        <center><a href='//forms.gle/sdrhNp3mENy1nBX37' target='__blank' type='button' class='btn btn-link link'><i>participe você também!</i></a></center>"); ?>
	
		</div>
		
		<!--NOSSOS TRABALHOS: ANALISES-->
		<section id="analises" style="">
		
			<div class="quadro_textos anime_left">
				<div class="imagem_div" > <i class="fas fa-chart-line"></i> <h2> <?php echo utf8_encode("ANÁLISES & PROJEÇÕES");?></h2></div>
				<div id="NOSSAS_ANALISES">  </div>
				<br>
				<center>
					<a id="nAnalises" href='./pages/pgs.php?act=analises' type="button" class="btn btn-outline-primary btn-lg">saiba mais</a>
				</center>
				
				
			</div>
		
		</section>
		
		
		<!--NOSSOS TRABALHOS: E-BOOKS-->
		<section id="ebooks" style="">
		
			<div class="quadro_textos anime_left">
				<div class="imagem_div" > <i class="fas fa-book"></i> <h2> NOSSOS LIVROS</h2></div>
				<div id="NOSSOS_LIVROS">  </div>
				<br>
				
			</div>
		
		</section>
		
		
		<!--QUEM SOMOS-->
		<section id="quem_somos" style="display:block;"> 
		
			<div class="">
			
				<div class="imagem_div" > <i class="fas fa-users"></i> <h2>QUEM SOMOS</h2></div>
				<div id="QUEM_SOMOS">  </div>
				
			</div>

		</section>
		
		
			
		<!-- NOSSA COMUNIDADE -->
		<section id="nossa_comunidade" class="" style="">
			<div class="">
				<div class="imagem_div" > <i class="fas fa-bullhorn"></i> <h2>NOSSA COMUNIDADE</h2></div>
				<div id="NOSSA_COMUNIDADE">  </div>
				<br>
			</div>

		</section>
		
		
		<!-- SEÇÃO DE AJUDA -->
		<section id="secao_ajuda" class="secao" style="display:block;">
			<div class="div_ajuda">
				<p><?php echo utf8_encode("Encontre aqui orientações referentes aos procedimentos necessários caso necessite denunciar alguma irregularidade que tenha sofrido e ferramentas técnicas diponíveis para análise de dados.");?></p>
				<div id="DADOS_UTEIS" class="secao_ajuda_item">  </div>
				<div id="DADOS_TOOLS" class="secao_ajuda_item">  </div>
			</div>
		</section>
		
		

		<!-- CONHEÇA O BLOG -->
		<section id="blog" class="secao" style="display:block;">
			<div class="conheca_blog">
				<div class="imagem_div" > <i class="fab fa-blogger-b"></i> <h2><?php echo utf8_encode("CONHEÇA NOSSOS CANAIS");?></h2></div>
				<div id="NOSSO_BLOG">  </div>
			</div>

		</section>

		
		
	</div>
	
	<!--SOLICITA QUE OS USUÁRIOS DO SITE ENTREM EM CONTATO-->	
	<div id="mensagem-apoio">
	
		<?php echo utf8_encode("<h3>ENTRE EM CONTATO: <spam style=''>CRÍTICAS E SUGESTÕES AJUDAM NOSSO TRABALHO!<spam></h3>"); ?>
	
	</div>
	
     <!-- FOOTER: RODAPÉ DA PÁGINA: MEU JABÁ! -->
	<footer  id="rodape" class="footer mt-auto py-3" style="display:block;">
	
			<div class="container" >										
					<center><div id="R_SOCIAL"> <a class="link" href="//www.facebook.com/evidenciasdigitais" target="__blank" ><i class="fab fa-facebook"></i></a>  |  <a class="link" href="//www.instagram.com/evidenciasdigitais" target="__blank"><i class="fab fa-instagram"></i></a>  |  <a class="link" href="//www.linkedin.com/in/lfsbittencourt" target="__blank"><i class="fab fa-linkedin"></i></a> </div></center>
					<center>
						<div id="email"><b><a href='mailto:luis-bittencourt@evidenciasdigitais.com.br'>luis-bittencourt@evidenciasdigitais.com.br</a></b></div>
						
						<div class="mb-3 text-muted controle-site" style="">[ total de visitas: <?php contador();?> | seu IP: <?php dados();?> ] </div>
					</center>
			</div>
			<div class="politicas" style="font-size:0.6em;">
			<center><div id=""> <a class="link" href="./pages/pgs.php?act=termo_privacidade"> <?php echo utf8_encode("política de privacidade");?> </a>  |  <a class="link" href="./pages/faq.php" target="__blank"> <?php echo utf8_encode("perguntas frequêntes");?> </a>  </div></center>
			</div>
			<div style="font-size:0.5em;"> 
					<p class="mt-3 mb-3 text-muted text-center"> <a class="link" href="//www.lfbittencourt.com.br" target="__blank" >&copy; lfbittencourt - 2009 / <?php echo $ano = date("Y"); ?></a>
			</div>			
			
	</footer>
 
	
	
	
	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script>window.jQuery || document.write('<script src="//code.jquery.com/jquery-3.5.0.js"><\/script>')</script>-->
	<!--<script src="//code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>-->
	<script>window.jQuery || document.write('<script src="js/jquery-3.4.1.min.js"><\/script>')</script>
	<script src="js/jquery-3.4.1.min.js"  crossorigin="anonymous"></script>
	
	<!-- Latest compiled and minified JavaScript -->
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<!--<link href="bootstrap/bootstrap-4.1.3-dist/js/bootstrap.min.js">-->
	 
  </body>
</html>
