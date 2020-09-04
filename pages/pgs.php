<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Pagina de conteudo dinamico">
    <meta name="author" content="Luis Fernando da Silva Bittencourt https://www.lfbittencourt.com.br">
    <link rel="icon" href="../img/logo.png">
	
	<?php 
		include("../global/global.php");
	?>

   <title> <?php echo utf8_encode("Evidências Digitais");?></title>

   <!-- Custom styles for this template -->
	<link rel="stylesheet" href="//cdn.usebootstrap.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!--<link href="bootstrap/bootstrap-4.1.3-dist/css/bootstrap.min.css"  rel="stylesheet">-->
	
	<!--<script src="//kit.fontawesome.com/ce38887de8.js" crossorigin="anonymous"></script>-->
	<link href="../fontawesome/fontawesome-free-5.11.2-web/css/all.css" rel="stylesheet">
	
	<!--<script src="//code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>-->
    <script src="../js/jquery-3.4.1.min.js"></script>
	
	<!-- Fonts do Google -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		
	<!-- Jquery for system -->
     <script src="../js/pages.js"></script>
	 
	 <!--CSS da pagina-->
	<link href="../css/pages.css" rel="stylesheet">
		 
  </head>

  <body>
  
	<div class="box" title="subir ao inicio da pagina.">
		<span><center> <i class="fas fa-angle-up"></i></center></span>
	</div>
  
	 
	 <nav class="navbar navbar-expand-md navbar-light bg-light  fixed-top" >
		 <a class="navbar-brand" href="../"><img src="../img/logo.png" width="45" height="45" class="d-inline-block align-top" alt="">
			<span style='font-size:20px; color:#FFFFFF;'> PAGES </span>
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

   <section id="pages">
   
		<div id="div_pages" class="container"> </div>
		
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
