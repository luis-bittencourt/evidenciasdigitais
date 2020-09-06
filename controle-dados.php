<?php
include("global/global.php");

$vAction = $_REQUEST["action"];

if( $vAction == "carrega_apresentacao"){
	
	$apresentacao = "O nosso propósito é produzir, disponibilizar e disseminar informações sobre os perigos existentes na web, objetivando promover
	a conscientização sobre a forma de uso ideal para a redução dos riscos da vida on-line. Somente compreendendo
	que a internet é de natureza humana, mesmo que de base tecnológica, será possível 
	reduzir as ameaças que cercam o mundo digital.";
					 
	$vReturnData = "$apresentacao";
	
	
}elseif( $vAction == "carrega_quem_somos"){

	$divs = "<div id='show_quem_somos' class=''>
				<h3>SOMOS 100% VOCÊ!</h3>
				<p>Somos uma iniciativa com foco na transmissão de conhecimentos, destinados a conscientização das pessoas para o uso correto da internet. Nosso propósito é o de produzirmos materiais de análises técnicas, conteúdos para estudos práticos, treinamentos e cursos voltados à segurança da informação. Tudo para ajudarmos as pessoas a desfrutarem o que de melhor propicia a web: ser o maior e melhor meio de integração humana. Gratidão por ter você conosco!</p>
	
	        </div>";
	
	$vReturnData = "$divs";
	
}elseif( $vAction == "carrega_quem_somos_autor"){	

	$divs = "<center><h1><b>SOBRE O AUTOR</b></h1></center>
			 <div id='quem_somos_imagem' class='quem_somos_item'><img src='../img/eu_metade.png' width='' height='' class='' alt='Luis Bittencourt - Evidencias Digitais'></div> 
             <h2>Luís Bittencourt:</h2>			 
			 <div id='texto' class='quem_somos_item' style='text-align:justify;'> 
				 Especialista em <b>Cybercrimes e Cybersecurity: prevenção e investigação de crimes digitais</b>. Formado em Análise e Desenvolvimento de Sistemas, pela Faculdade Senac Porto Alegre. E principalmente ser pai da Camila, Bruno e Fernando, sua maior competência.<br>
				 <br>
				 Policial civil aposentado do Estado do Rio Grande do Sul onde trabalhou por mais de dez anos na atividade de inteligência. Neste período, atuou na área de segurança orgânica e contra inteligência, participando ativamente do desenvolvimento de ferramentas, rotinas e processos de trabalho para melhora na prestação de serviços à comunidade; recentemente, colaborou junto ao Ministério da Justiça e Segurança Pública, no auxílio ao desenvolvimento de um portal nacional destinado ao fornecimento de informações para os profissionais de segurança pública, justiça, controle e fiscalização.<br>
				 <br>
				 Também desempenhou atividades de professor de investigação de crimes praticados pela internet, junto a Academia de Polícia Civil do Rio Grande do Sul, lecionando nas cadeiras de tecnologia e segurança da informação. Participou, também, na qualidade de docente do Curso de Investigação de Crimes de Alta Tecnologia, promovido pelo Estado de Goiás e, mais recentemente, em edições do Curso de Inteligência Cibernética, promovido pelo governo federal nos Estados de Mato Grosso, Rio de Janeiro, Rondônia, Roraima e Sergipe, entre outros cursos e eventos.<br>
				 <br>
				 <a href='//lattes.cnpq.br/3106451902819230' target='__blank' type='button' class='btn btn-link'>veja também: CURRÍCULO LATTES CNPq</a>
			 </div>   ";
			
	$vReturnData = "$divs";
	
}elseif( $vAction == "secao_ajuda_dados_uteis"){	
	
	$dados = "<h3><i class='fas fa-book-reader'></i> ORIENTAÇÕES</h3>
	
		<ul>
			<li><a class='link' href='./pages/pgs.php?act=preservacao'>Preservação de evidências</a></li>
			<li><a class='link' href='./pages/pgs.php?act=especializada'>Delegacias especializadas</a></li>
			<li><a class='link' href='./pages/pgs.php?act=orientacoes'>Outras orientações</a></li>
		</ul>
	
	";
	
	$vReturnData = "$dados";
	
}elseif( $vAction == "secao_ajuda_dados_tools"){	
	
	$dados = "<h3><i class='fas fa-burn'></i> FERRAMENTAS</h3>
	
		<ul>
			<li><a class='link' href='./pages/pgs.php?act=manuais'>Manuais</a></li>
			<li><a class='link' href='./pages/pgs.php?act=ferramentas'>Ferramentas</a></li>
			<li><a class='link' href='./pages/pgs.php?act=legislacoes'>Legislações</a></li>
		</ul>
	
	";
	
	
	
	$vReturnData = "$dados";
	
	
}elseif( $vAction == "carrega_relatorios_e_legislacoes"){
	
	$divs = "<div id='legislacoes_1' class='legis_item'>
			   <center><button id='manuais' type='button' class='btn btn-primary btn-lg btn-navegacao botao-legis'> MANUAIS</button></center>
			 </div>
			 
	         <div id='legislacoes_2' class='legis_item'>
				<center><button id='relatorios' type='button' class='btn btn-primary btn-lg btn-navegacao botao-legis'>FERRAMENTAS</button></center>
			 </div>
			 			 
			 <div id='legislacoes_3' class='legis_item'>
				<center><button id='legislacoes' type='button' class='btn btn-primary btn-lg btn-navegacao botao-legis'>LEGISLAÇÕES</button></center>
			 </div>
			 
			 ";
	
	$vReturnData = "$divs";
	
}elseif( $vAction == "carrega_legislacoes_manuais"){	
	$tipo = $_REQUEST["tipo"];
	
	if($tipo == "legislacoes"){
		
		$legs = "
			<div class='table-responsive'>
				<!--<button id='volta_legis' type='button' class='btn btn-link'> FECHAR </button>-->
				<h4>Legislações de referência sobre crimes praticados pela internet:</h4>
				<table class='table table-striped table-hover'>
				  <thead class='thead-dark'>
					<tr>
					  <th scope='col' width='20%'>LEGISLAÇÃO</th>
					  <th scope='col' width='20%'>DATA</th>
					  <th scope='col'>ASSUNTO</th>
					</tr>
				  </thead>
				  <tbody>
				  
					<!-- 7.716/89 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/leis/l7716.htm' target='__blank'>7.716/89 - lei de combate ao racismo </a></th>
					  <td>05/01/1989</td>
					  <td>Define os crimes resultantes de preconceito de raça ou de cor.</td>  
					</tr>
					
					<!-- 9.296/1996 -->					
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/LEIS/L9296.htm' target='__blank'>9.296/1996 - interceptações de comunicação em sistemas de telefonia, informática e telemática</a></th>
					  <td>24/07/1996</td>
					  <td>Regulamenta o inciso XII, parte final, do art. 5° da Constituição Federal.</td> 
					</tr>
					
					<!-- 9.609/1998 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/Leis/L9609.htm' target='__blank'>9.609/1998 - Proteção a propriedade intelectual</a></th>
					  <td>19/02/1998</td>
					  <td>Dispõe sobre a proteção da propriedade intelectual de programa de computador, sua comercialização no País, e dá outras providências.</td>  
					</tr>
					
					<!-- 11.829/2008 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/_ato2007-2010/2008/lei/l11829.htm' target='__blank'>11.829/2008 - Combate a pornografia infantil</a></th>
					  <td>25/11/2008</td>
					  <td>Altera a Lei no 8.069, de 13 de julho de 1990 - Estatuto da Criança e do Adolescente, para aprimorar o combate à produção, venda e distribuição de pornografia infantil, bem como criminalizar a aquisição e a posse de tal material e outras condutas relacionadas à pedofilia na internet.</td>  
					</tr>
					
					<!-- 12.735/2012 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/_Ato2011-2014/2012/Lei/L12735.htm' target='__blank'>12.735/2012 - lei Azeredo </a></th>
					  <td>30/11/2012</td>
					  <td>Altera o Decreto-Lei nº 2.848, de 7 de dezembro de 1940 - Código Penal, o Decreto-Lei nº 1.001, de 21 de outubro de 1969 - Código Penal Militar, e a Lei nº 7.716, de 5 de janeiro de 1989, para tipificar condutas realizadas mediante uso de sistema eletrônico, digital ou similares, que sejam praticadas contra sistemas informatizados e similares; e dá outras providências.</td> 
					</tr>
					
					<!-- 12.737/2012 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/_ato2011-2014/2012/lei/l12737.htm' target='__blank'>12.737/2012 - lei Carolina Dieckmann</a></th>
					  <td>30/11/2012</td>
					  <td>Dispõe sobre a tipificação criminal de delitos informáticos; altera o Decreto-Lei nº 2.848, de 7 de dezembro de 1940 - Código Penal; e dá outras providências.</td> 
					</tr>
					
					<!-- 12.850/2013 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/_Ato2011-2014/2013/Lei/L12850.htm' target='__blank'>12.850/2013 - organizações criminosas</a></th>
					  <td>02/08/2013</td>
					  <td>Define organização criminosa e dispõe sobre a investigação criminal, os meios de obtenção da prova, infrações penais correlatas e o procedimento criminal; altera o Decreto-Lei nº 2.848, de 7 de dezembro de 1940 (Código Penal); revoga a Lei nº 9.034, de 3 de maio de 1995; e dá outras providências.</td> 
					</tr>
					
					<!-- 12.965/2014 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/_ato2011-2014/2014/lei/l12965.htm' target='__blank'>12.965/2014 - Marco Civil da Internet</a></th>
					  <td>23/04/2014</td>
					  <td>Estabelece princípios, garantias, direitos e deveres para o uso da Internet no Brasil.</td> 
					</tr>
					
					<!-- 13.185/2015 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/_ato2015-2018/2015/lei/l13185.htm' target='__blank'>13.185/2015 - Bullying </a></th>
					  <td>06/11/2015</td>
					  <td>Institui o Programa de Combate à Intimidação Sistemática ( Bullying ).</td>  
					</tr>
					
					<!-- 13.709/2018 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/_ato2015-2018/2018/lei/L13709.htm' target='__blank'>13.709/2018 - Lei Geral de Proteção de Dados Pessoais</a></th>
					  <td>14/08/2018</td>
					  <td>Lei Geral de Proteção de Dados Pessoais (LGPD). </td> 
					</tr>
					
					<!-- 13.718/2018 -->
					<tr>
					  <th scope='row'><a href='//www.planalto.gov.br/ccivil_03/_Ato2015-2018/2018/Lei/L13718.htm' target='__blank'>13.718/2018 - importunação sexual e divulgação de cena de estupro</a></th>
					  <td>24/09/2018</td>
					  <td>Altera o Decreto-Lei nº 2.848, de 7 de dezembro de 1940 (Código Penal), para tipificar os crimes de importunação sexual e de divulgação de cena de estupro, tornar pública incondicionada a natureza da ação penal dos crimes contra a liberdade sexual e dos crimes sexuais contra vulnerável, estabelecer causas de aumento de pena para esses crimes e definir como causas de aumento de pena o estupro coletivo e o estupro corretivo; e revoga dispositivo do Decreto-Lei nº 3.688, de 3 de outubro de 1941 (Lei das Contravenções Penais).</td>  
					</tr>
					
				  </tbody>
				</table>
			</div>
		";	
		
		$return = "$legs";
		
	}elseif( $tipo == "relatorios"){
				
		$SERVICOS = "
		            <!-- CND -->
					<tr>
					  <th scope='row'><a href='//indicadores.safernet.org.br' target='__blank'>CND - Central Nacional de Denúncias de Crimes Cibernéticos</a></th>
					  <td>A Central Nacional de Denúncias de Crimes Cibernéticos é única na América Latina e Caribe, e recebe uma média de 2.500 denúncias (totais) por dia envolvendo páginas contendo evidências dos crimes de Ponografia Infantil ou Pedofilia, Racismo, Neonazismo, Intolerância Religiosa, Apologia e Incitação a crimes contra a vida, Homofobia e maus tratos contra os animais.</td>  
					</tr>
					
					<!-- CTIR.GOV -->
					<tr>
					  <th scope='row'><a href='//emnumeros.ctir.gov.br/' target='__blank'> CTIR - Grupo de Resposta a Incidentes de Segurança</a></th>
					  <td>O CTIR Gov é um Computer Security Incident Response Team (CSIRT), ou Grupo de Resposta a Incidentes de Segurança, que vem a ser uma organização responsável por receber, analisar e responder a notificações e atividades relacionadas a incidentes de segurança em computadores.</td>  
					</tr>
					
					<!-- INTERPOL -->
					<tr>
					  <th scope='row'><a href='//www.interpol.int/Crimes/Cybercrime' target='__blank'>INTERPOL - International Criminal Police Organization</a></th>
					  <td>Our full name is the International Criminal Police Organization and we are an inter-governmental organization. We have 194 member countries, and we help police in all of them to work together to make the world a safer place. To do this, we enable them to share and access data on crimes and criminals, and we offer a range of technical and operational support.</td>  
					</tr>
					
					<!-- CERT BR -->
					<tr>
					  <th scope='row'><a href='//cert.br/stats/' target='__blank'>CERT.BR - Centro de Estudos, Resposta e Tratamento de Incidentes no Brasil</a></th>
					  <td>O CERT.br é o Grupo de Resposta a Incidentes de Segurança para a Internet no Brasil, mantido pelo NIC.br, do Comitê Gestor da Internet no Brasil. É responsável por tratar incidentes de segurança em computadores que envolvam redes conectadas à Internet no Brasil. Atua como um ponto central para notificações de incidentes de segurança no Brasil, provendo a coordenação e o apoio no processo de resposta a incidentes e, quando necessário, colocando as partes envolvidas em contato.</td>  
					</tr>
					
					<!-- VÍRUS TOTAL -->
					<tr>
					  <th scope='row'><a href='//www.virustotal.com/gui/home/upload' target='__blank'> VÍRUS TOTAL - Antivirus on-line</a></th>
					  <td>VirusTotal inspects items with over 70 antivirus scanners and URL/domain blacklisting services, in addition to a myriad of tools to extract signals from the studied content. Any user can select a file from their computer using their browser and send it to VirusTotal. VirusTotal offers a number of file submission methods, including the primary public web interface, desktop uploaders, browser extensions and a programmatic API. The web interface has the highest scanning priority among the publicly available submission methods. Submissions may be scripted in any programming language using the HTTP-based public API.</td>  
					</tr>
					
					<!-- CENTRAL OPS -->
					<tr>
					  <th scope='row'><a href='//centralops.net/co/' target='__blank'> CENTRAL OPS - Domain Dossier	Investigate domains and IP addresses</a></th>
					  <td>Disponibiliza um conjunto de ferramentas on-line, destinadas a verificação de registros de domínios, IP, monitoramento de rede, entre outros.</td>  
					</tr>
					
					<!-- TRACED EMAIL -->
					<tr>
					  <th scope='row'><a href='https://whatismyipaddress.com/trace-email' target='__blank'> TRACED EMAIL - Análise de e-mails</a></th>
					  <td>Ferramenta on-line para análise de cabeçalho de e-mail</td>  
					</tr>
					
					<!-- CYBERMAP KASPERSKY -->
					<tr>
					  <th scope='row'><a href='https://cybermap.kaspersky.com/pt/widget' target='__blank'> CYBERMAP - Ataques virtuais</a></th>
					  <td>Ferramenta de monitoramento de ciberameaça em tempo real, da Kaspersky.</td>  
					</tr>
					
					";
		
		$servs = "
				<div class='table-responsive'>
				<!--<button id='volta_legis' type='button' class='btn btn-link'> FECHAR </button>-->
				
				<h4>Selecione o serviço que você deseja visualisar:</h4>
				<table class='table table-striped table-hover'>
				  <thead class='thead-dark'>
					<tr>
					  <th scope='col' width='30%'>SERVIÇO</th>
					  <th scope='col' width='70%'>DESCRIÇÃO</th>
					</tr>
				  </thead>
				  <tbody>
					
					$SERVICOS
					
				  </tbody>
				</table>
			</div>	
		";
			
		$return = "$servs";
		
	}elseif( $tipo == "manuais"){
				
		//$dir = "/wamp64/www/evidenciasdigitais/job/pub";
		$server_path = $_SERVER['DOCUMENT_ROOT'];
		$dir_pub = dir($server_path."/job/man/");
		
		$array_files = "";
		$nTot = 0;
		while($file = $dir_pub -> read()){
			
			if( $file != "." && $file != ".."){
					
				list($fAno, $fName, $fResp, $fIdioma) = explode("--",$file);
				list($fIdi,$fExt) = explode(".",$fIdioma);
				
				$array_files .= "<tr>
									<td>$fAno</td>	
									<th scope='row'><a href='../job/man/$file' target='__blank'>$fName</a></th>
									<td>$fResp</td>					  
									<td>$fIdi</td>					  
									<td>$fExt</td>					  				  
								</tr>
				
				";
				$nTot++;
			}	
			
		}		
		$dir_pub -> close();
		
		$pubs = "				
				<div class='table-responsive'>
				<!--<button id='volta_legis' type='button' class='btn btn-link'> FECHAR </button>-->
				<h4>Selecione o documento que você deseja visualisar:</h4>
				<p style='text-align:justify;font-size:0.7em;'>Todos os documentos aqui relacionados são de livre distribuição. Caso haja algum que contrarie isto, favor entrar em contato para as devidas providências.</p>				
				<p style='text-align:justify;font-size:1em;'>TOTAL: $nTot</p>
				<table class='table table-striped table-hover'>
				  <thead class='thead-dark'>
					<tr>
					  <th scope='col' width='10%'>ANO</th>
					  <th scope='col' width='50%'>TITULO</th>
					  <th scope='col' width='10%'>RESPONSAVEL</th>
					  <th scope='col' width='5%'>IDIOMA</th>
					  <th scope='col' width='5%'>TIPO</th>
					</tr>
				  </thead>
				  <tbody>
					
					$array_files
					
				  </tbody>
				</table>
			</div>	
		";
			
		$return = "$pubs";
		
	}
	
	$vReturnData = "$return";
	
	
}elseif( $vAction == "carrega_nossos_trabalhos"){	
	
	$divs = "<div id='div_trabalhos' class='flip'>		 
				 <div id='trabalhos_img' class='trabalhos_item frente'> 
					<!--<div class='oque_fazemos'>
						<p>Saiba tudo que fazemos</p>
					</div>-->
				 </div> 
				 <div id='trabalhos_text' class='trabalhos_item fundo'> 
					
					<h5 class='card-title'><b>LUÍS BITTENCOURT</b></h5>
					<p style='text-align:justify;font-size:0.7em;'> especialista em Cybercrimes e Cybersecurity: prevenção e investigação de crimes digitais. </p>
					<a href='./pages/pgs.php?act=luis-bittencourt' class='btn btn-link'> saiba mais </a>
					<!--<ol>
						<li><a id='analises' href='./produtos/analises/analises.php' class='btn btn-link social'  title='analises'>Análises</a></li>
						<li><a id='artigos' href='./produtos/artigos/artigos.php' class='btn btn-link social'  title='artigos'>Artigos</a></li>
						<li><a id='pps'     href='./produtos/slides/pps.php' class='btn btn-link social' title='slides'>Apresentações</a></li>
						<li><a id='livros'  href='./produtos/livros/livros.php' class='btn btn-link social'  title='livros'>Livros</a></li>
					</ol>-->
				 </div> 
				 	 
			</div>";
	
	$vReturnData = "$divs";
	
}elseif( $vAction == "carrega_nossa_comunidade"){

	$divs = "<div id='texto' class='comunidade_item'> <b>Inscreva-se!</b> Informe seu e-mail, para receber gratuitamente nossas publicações.<br>
			  Faça parte de nossa comunidade, voltada a segurança da informação. Participe dessa iniciativa, recebendo periodicamente todas as novidades envolvendo
			  o mundo digital e suas repercussões no cotidiano das pessoas.<br>
			  
			 </div>   
			 <div id='frm_cadastro' class='comunidade_item'> 
			 
				<!-- INSERIR CÓDIGO FORM MAIL CHIMP -->
				
				<!-- Begin Mailchimp Signup Form -->
				<!--<link href='//cdn-images.mailchimp.com/embedcode/classic-10_7.css' rel='stylesheet' type='text/css'> -->
				<style type='text/css'>
					/*#mc_embed_signup{background:#e3f2fd; clear:left; font:12px Open Sans,Arial,sans-serif; }
					 Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
					   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
				</style>
				<div id='mc_embed_signup'>
				<form action='https://lfbittencourt.us20.list-manage.com/subscribe/post?u=3940373452cfed17b9a6c64d1&amp;id=627a80de35' method='post' id='mc-embedded-subscribe-form' name='mc-embedded-subscribe-form' class='validate' target='_blank' novalidate>
					<div id='mc_embed_signup_scroll'>
					<h2>PODE CONFIAR. É SEGURO!</h2>
				<div class='indicates-required'><span class='asterisk_'>*</span> campo requerido</div>
				<div class='mc-field-group'>
					<label for='mce-EMAIL'> <span class='label_form'>seu e-mail </span> <span class='asterisk_'>*</span>
				</label>
					<input type='email' value='' name='EMAIL' class='required email' id='mce-EMAIL'>
				</div>
					<div id='mce-responses' class='clear'>
						<div class='response' id='mce-error-response' style='display:none'></div>
						<div class='response' id='mce-success-response' style='display:none'></div>
					</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style='position: absolute; left: -5000px;' aria-hidden='true'><input type='text' name='b_3940373452cfed17b9a6c64d1_627a80de35' tabindex='-1' value=''></div>
					<div class='clear'><input type='submit' value='Inscrever-se' name='subscribe' id='mc-embedded-subscribe' class='button'></div>
					</div>
				</form>
				</div>
				
				<!--End mc_embed_signup-->
				
			 </div> ";

	$vReturnData = "$divs";	
	
}elseif( $vAction == "carrega_destaques_blog"){	

	$divs = "<div id='blog_1' class='flex_item blog_item'>
	           <div id='meu-blog'>Blog: www.lfbittencourt.com.br</div>
			   <center><a href='//www.lfbittencourt.com.br' target='__blank' type='button' class='btn btn-outline-primary btn-lg btn-navegacao'>venha conhecer</a></center>
			 </div>
			 
	         <div id='blog_2' class='flex_item blog_item'>
				<div id='meu-facebook'>Facebook: EvidenciasDigitais</div>
				<center><a href='//www.facebook.com/evidenciasdigitais' target='__blank' type='button' class='btn btn-outline-primary btn-lg btn-navegacao'>venha conhecer</a></center>
			 </div>
			 
			 <div id='blog_3' class='flex_item blog_item'>
				<div id='meu-instagram'>Instagram: @EvidenciasDigitais</div>
				<center><a href='//www.instagram.com/evidenciasdigitais/' target='__blank' type='button' class='btn btn-outline-primary btn-lg btn-navegacao'>venha conhecer</a></center>
			 </div>";
	
	$vReturnData = "$divs";		

}elseif( $vAction == "formulario_emailFaleConosco"){	
	
	$form = "<div id='formularios' style=''>
						 <form id='form_faleConosco' class='form-signin_' style=''>
							<!--<div class='' style='font-size:68px; text-align:center;'> <i class='far fa-envelope-open'></i></div>
								<h3 class='form-signin-heading'><center>Deixe sua mensagem</center></h3>-->
							
							<div class='form-group'>
								<!--<label for='email_origem'>E-mail de origem</label>-->
								<input type='email' id='email_origem' name='email_origem' class='form-control required' placeholder='Endereço de email' required>
								
							</div>
							
							<div class='form-group'>
								<!--<label for='assunto'>Assunto (subject)</label>-->
								<input type='text' id='assunto' name='assunto' class='form-control required' placeholder='Assunto da mensagem' required>
								
							</div>
							
							<div class='form-label-group'>				
								<textarea id='mensagem' name='mensagem' class='form-control required' rows='2' placeholder='Teor da mensagem'></textarea>
								
							</div>
							
							<br/>
							 <center><button id='enviar' class='btn btn-primary' type='button'>ENVIAR MENSAGEM</button></center>
							
						</form>
						
							   <div id='mensagens_sys' class=''></div>
							   <br/>
					</div>";
	
	
	$vReturnData = $form;
	
	
}elseif( $vAction == "carrega_como_denunciar"){	
	
	$divs = "<div id='procedimento' class='flex_item den_item'>
	           <span>COMO PROCEDER</span>
			   <center><a id='como_proceder' href='#' type='button' class='btn btn-outline-primary btn-lg btn-navegacao botao-denuncia'>VEJA AQUI</a></center>
			 </div>
			 
	         <div id='especializados' class='flex_item den_item'>
				<span>ONDE COMPARECER</span>
				<center><a id='especializadas' href='#' type='button' class='btn btn-outline-primary btn-lg btn-navegacao botao-denuncia'>VEJA AQUI</a></center>
			 </div>
			 
			 <div id='links_uteis' class='flex_item den_item'>
				<span>OUTRAS ORIENTAÇÕES</span>
				<center><a id='uteis' href='#' type='button' class='btn btn-outline-primary btn-lg btn-navegacao botao-denuncia'>VEJA AQUI</a></center>
			 </div>";
	
	$vReturnData = $divs;
	
}elseif( $vAction == "carrega_como_denunciar_procedimentos"){
	
	$dados="
	    <h2>COMO PROCEDER CASO TENHA SIDO VÍTIMA</h2>
		<h4 style='text-align:left;'>Preserve o maior número de indícios possível:</h4>
		<p style='text-align:justify;'><b>Copie a URL do site, vídeo ou postagem:</b> a URL (Uniform Resource Locator ou localizador uniforme de recursos) é o endereço de onde está a publicação e fica situada na barra superior de seu navegador. Deve ser copiada a mão ou em um arquivo de anotações digital de sua preferência (word, writer, bloco de notas etc.). Independentemente de estar ou não “printando” (copiando) a tela de seu computador, este procedimento é importante a fim de evitar que o respectivo endereço eletrônico fique ilegível, por ocasião da respectiva comunicação as autoridades;</P>
		<p style='text-align:justify;'><b>Faça print de tela da página onde os fatos ocorreram:</b> quer seja de e-mail, página de rede social, site de comércio eletrônico ou de falso site bancário, sempre que for possível, deve ser salvo a imagem da respectiva página (em formato de imagem ou PDF), para preservação da situação da mesma no momento em que o fato foi constatado pela vítima;</P>
		<p style='text-align:justify;'><b>Copie o cabeçalho completo de e-mails:</b> caso o fato ocorrido tenha sido em decorrência do recebimento de mensagens eletrônicas (e-mail), faça um print de tela do cabeçalho completo também. Tendo em vista diferentes tipos de serviços de e-mails disponíveis, caso não saiba como localizar o cabeçalho completo, existem vários tutoriais na internet explicando como acessar tal conteúdo, motivo pelo qual não preciso discorrer sobre o assunto, pela facilidade de você achar este meio de prova. Neste cabeçalho estão registrados todos os endereços IP (internet protocol) de origem e destino da respectiva correspondência. Caso não se ache seguro para executar este passo, solicite a um parente, amigo ou conhecido que saiba, ou, ainda, solicite orientação junto ao órgão policial responsável pela investigação;</P>
		<p style='text-align:justify;'><b>Baixe para seu computador imagens e/ou vídeos contendo os indícios da prática criminal:</b> caso os fatos constatados estejam sendo veiculados em formato de imagens e/ou vídeos, eles devem ser salvos e armazenados em mídias removíveis. As imagens bastam serem copiadas para o disco rígido (HD) de seu computador. Os vídeos são mais complexos para sua obtenção, mas nada muito difícil, pois existem softwares como o caso do <a href='https://vdownloader.com/pt/' target='__blank'> VDownloader </a>, ou outro de sua preferência que permita o salvamento de forma rápida, prática e segura;</P>
		<p style='text-align:justify;'><b>Copie todas as páginas do site sob suspeição:</b> este passo já não é tão necessário, num primeiro momento, mas deve ser feito tão logo que possível. Fazer a cópia das páginas de internet de um determinado site pode ser feito como a cópia de qualquer documento, procurando em seu navegador a opção: “Salvar página como” ou “Salvar como” e escolher a respectiva pasta de destino. Também existem softwares próprios para este procedimento, sendo sugerido o <a href='https://www.httrack.com/' target='__blank'>HTTrack website copier</a>, por ser gratuito e de fácil utilização;</P>
		<p style='text-align:justify;'><b>Grave todas as provas em CD ou DVD não regravável:</b> objetivando preservar os elementos de prova coletados, para uso da instrução criminal, é de extrema importância que tudo seja gravado em mídias não regraváveis, a fim de se garantir a preservação e autenticidade do material. Procure fazer duas (02) cópias, ficando uma como você e a outra deve ser entregue para ser anexada ao respectivo inquérito policial.</P>
		<!--<p style='text-align:left;'><button id='volta_denuncias' type='button' class='btn btn-link'> FECHAR </button></p> -->
	";

	$vReturnData = $dados;

}elseif( $vAction == "carrega_como_denunciar_especializadas"){
		
	$SERVICOS = "
		            <!-- BAHIA -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'>BAHIA</a></th>
					  <th scope='row'>Grupo Especializado de Repressão aos Crimes por Meio Eletrônicos</th>
					  <td>Rua Politeama de Baixo, s/n (Localizado em uma sala da Polinter – Complexo Policial dos Barris –), Salvador/Bahia. FONE:(71)3117–6109</td>  
					</tr>
					
					<!-- ESPIRITO SANTO -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> ESPIRITO SANTO</a></th>
					  <th scope='row'> Delegacia de Repressão a Crimes Eletrônicos</th>
					  <td>Avenida Nossa Senhora da Penha, 2290, CEP: 29045-402, Santa Luiza (funciona do edifício-sede da Chefia de Polícia Civil, ao lado do DETRAN), Vitória/ES. FONE:(27) 3137-2607 / 3137-9078</td>  
					</tr>
					
					<!-- MARANHÃO -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'>MARANHÃO</a></th>
					  <th scope='row'>Departamento de Combate aos crimes tecnológicos</th>
					  <td>Rua do Correio, 75, Fátima, CEP: 65.030-340, São Luiz – MA. FONE:98 3214-8657</td>  
					</tr>
					
					<!-- MATO GROSSO -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'>MATO GROSSO</a></th>
					  <th scope='row'>Gerência Especializada de Crime de Alta Tecnologia (GECAT)</th>
					  <td>Av. Coronel Escolástico, 346 CEP: 78.010-200, Cuiabá – MT. FONE:(65) 3613-5649</td>  
					</tr>
					
					<!-- MINAS GERAIS -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> MINAS GERAIS </a></th>
					  <th scope='row'> DEICC - Delegacia Especializada de Investigações de Crimes Cibernéticos </th>
					  <td>Av. Francisco Sales, 780, Bairro Floresta, esquina de Av. dos Andradas (altura do nº 1270) - Belo Horizonte / MG CEP: 30.150-220. FONE: (31) 3217-9714 / (31) 3217-9712 / (31) 3217-9714</td>  
					</tr>
					
					<!-- PARÁ -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> PARÁ </a></th>
					  <th scope='row'>Divisão de Prevenção e Repressão a Crimes Tecnológicos (DRCT)</th>
					  <td>Rua Oliveira Belo, 807, CEP: 66.000-000, Umarizal, Belém/PA. FONE:(91) 3222-7567 / 7153</td>  
					</tr>
					
					<!-- PARANÁ -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> PARANÁ </a></th>
					  <th scope='row'>Núcleo de Combate aos Cibercrimes (NUCIBER)</th>
					  <td>Rua José Loureiro, 376, 1º andar, CEP: 80010-000 - Centro – Curitiba/PR. FONE:(41) 3321-1900</td>  
					</tr>
					
					<!-- PERNAMBUCO  -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> PERNAMBUCO </a></th>
					  <th scope='row'> Delegacia de Polícia de Repressão aos Crimes Cibernéticos </th>
					  <td>Rua da Aurora, 487, Boa Vista, CEP 50050-000, Recife/PE. FONE:081-3184-3206 / 3207.</td>  
					</tr>
					
					<!-- PIAUÍ   -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> PIAUÍ  </a></th>
					  <th scope='row'> Delegacia Especializada de Repressão aos Crimes de Alta Tecnologia - DERCAT </th>
					  <td>Rua Prata, S/N, Piçarra, CEP 64017-160 , Teresina - PI. FONE: (86) 3216-5275</td>  
					</tr>
					
					<!-- RIO GRANDE DO SUL  -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> RIO GRANDE DO SUL </a></th>
					  <th scope='row'> Delegacia de Repressão aos Crimes Informáticos (DRCI) </th>
					  <td>Rua Prof. Cristiano Fischer, 1440 - Bairro Jardim do Salso - Porto Alegre/RS FONE:(51)3288-9815</td>  
					</tr>
					
					<!-- SÃO PAULO   -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> SÃO PAULO  </a></th>
					  <th scope='row'> 4ª Delegacia de Delitos Cometidos por Meios Eletrônicos (DIG) </th>
					  <td>Avenida Zack Narchi, 152, Carandiru, São Paulo/SP. FONE:(11) 2224-0300</td>  
					</tr>
					
					<!-- SERGIPE   -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> SERGIPE  </a></th>
					  <th scope='row'> Delegacia de Repressão a Crimes Cibernéticos (DRCC) </th>
					  <td>Rua Laranjeiras, 960, 1º andar, Centro, Aracaju/SE. FONE:(79)3198-1135</td>  
					</tr>
					
					<!-- RIO DE JANEIRO  -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> RIO DE JANEIRO </a></th>
					  <th scope='row'> Delegacia de Repressão aos Crimes de Informática (DRCI) </th>
					  <td>Rua Professor Clementino Fraga, nº 77 (2º andar), Cidade Nova (prédio da 6ª DP), Rio de Janeiro/RJ (CEP: 20230-250). FONE: (21) 2332-8192, 2332-8188 e 2332-8191</td>  
					</tr>
					
					<!-- TOCANTINS   -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> TOCANTINS  </a></th>
					  <th scope='row'> Divisão de Repressão a Crimes Cibernéticos – DRCC </th>
					  <td> Av. Teotônio Segurado, Quadra 202 Sul, CEP: 77020450, Conjunto 01, Lote 05, Palmas/TO. FONE:(63) 3218-6986</td>  
					</tr>
					
					<!-- DISTRITO FEDERAL   -->
					<tr>
					  <th scope='row'><a href='#' target='__blank'> DISTRITO FEDERAL  </a></th>
					  <th scope='row'> Delegacia Especial de Repressão ao Crime Cibernético - DRCC </th>
					  <td> Setor de Áreas Isoladas - Sudoeste- Bloco D - Prédio do D. P. E., CEP: 70.610-200, Brasília/DF. FONE:(61) 3207 4892</td>  
					</tr>
					
					";
		
		$servs = "
				<div class='table-responsive'>
				<!--<button id='volta_denuncias' type='button' class='btn btn-link'> FECHAR </button>-->			
				
				<h2>PROCURE A DELEGACIA DE POLÍCIA MAIS PRÓXIMA</h2>
				<p style='text-align:justify;'>Objetivando iniciar o respectivo processo ou instrução criminal, compareça tão logo que possível a um órgão da Polícia Civil. Existe em alguns Estados <b>órgãos especializados</b> para a investigação de crimes comedidos na internet. Caso no seu Estado ou cidade não possua, procure a Delegacia de Polícia mais próxima. No momento do registro, detalhe todos os acontecimentos, fazendo a entrega de tudo que pôde ser obtido que corrobore os acontecimentos.</P>
				<table class='table table-striped table-hover'>
				  <thead class='thead-dark'>
					<tr>
					  <th scope='col' width='10%'>ESTADO</th>
					  <th scope='col' width='20%'>ÓRGÃO</th>
					  <th scope='col' width='70%'>ENDEREÇO</th>
					</tr>
				  </thead>
				  <tbody>
					
					$SERVICOS
					
				  </tbody>
				</table>
			</div>	
		";
			
		$return = "$servs";
	
	

	$vReturnData = $return;

}elseif( $vAction == "carrega_como_denunciar_uteis"){	
	
	$return = "<h5>Outros passos necessários:</h5>
			   <p style='text-align:justify;'><b>1.COMUNIQUE FRAUDES BANCÁRIAS A SUA INSTITUIÇÃO:</b> Tratando-se de fraudes bancárias como subtração de valores, pagamentos indevidos de boletos, compras em cartão de crédito pela internet, entre outros, imediatamente entre em contato com o seu banco, a fim de que sua conta não tenha mais movimentações indevidas. Após a lavratura do respectivo Boletim de Ocorrência, conforme o passo 2, encaminhe uma cópia para a sua instituição bancária, caso seja exigido.</P>
			   <p style='text-align:justify;'><b>2.DENUNCIE AO SERVIÇO DE INTERNET:</b>Principalmente no caso de comércio eletrônico e redes sociais em geral, estes possuem mecanismos para o recebimento de denúncias contra abusos cometidos. Normalmente são de fácil localização junto as postagens. Sempre leia com atenção os termos de uso e documentos disponibilizados pelo respectivo serviço. Estes documentos costumam detalhar todos os direitos e obrigações de ambas as partes, indicando como as denúncias devem ser tratadas e a quem dirigidas.</p>
			   <p style='text-align:justify;'><b>3.PEDIDO DE REMOÇÃO DE PESQUISA DO GOOGLE:</b>Caso os fatos estejam aparecendo nas pesquisas do Google, você pode entrar em contato com ele, solicitando que seja retirado dos resultados de pesquisa. Esta solicitação deve ser feita através do <a href='https://support.google.com/legal/answer/3110420?rd=2' target='__blank'>SUPPORT GOOGLE </a>. </p>
			   <!--<p style='text-align:left;'><button id='volta_denuncias' type='button' class='btn btn-link'> FECHAR </button></p> -->
	";
	
	
	$vReturnData = $return;
	
}elseif( $vAction == "envia_email_FaleConosco"){

	ini_set('display_errors', 0);
		error_reporting(E_ALL);

		$testaDados = $_REQUEST;
	
	//Verificar se foram todos preenchidos.
	$_cont=0;
	foreach ($testaDados as $vlr=>$cont){
		
			if(empty($cont)){
				
				if( $vlr != "codigo_usuario" ){
										
					echo "preencha o  campo: <b>$vlr</b>;<br />";
					$_cont++;
					
				}	
			} 
				
		}
		
		if( $_cont <> 0 ){
			
				die("[Error:] <b><font color='ff0000'>Preencha os campos descritos acima!</font></b><br />");
				
		}
		
		$arrayDados[] = $_REQUEST;
		foreach($arrayDados as $dados){
			
				$origem           = $dados["email_origem"   ];
				$destino           = "loja@alinhavosebordados";
				$assunto          = $dados["assunto"             ];
				$mensagem    = $dados["mensagem"       ];
						
		}
			
			$from = $origem;

			$to = $destino;

			$subject = $assunto;

			$message = $mensagem;

			$headers = "De:". $from;

			$enviar = mail($to, $subject, $message, $headers);
			
			$resultado = $enviar;
			if($resultado == false){
				
				die("[ Error: ] Erro ao enviar a mensagem.");
				
			}else{
				
				$vReturnData = "[$resultado] Mensagem enviada com sucesso";
				
			}


}elseif( $vAction == "texto_analises_projecoes"){
	$status = $_REQUEST["status"];
	
	
	$btn = "<spam style='color:white;'>
					<button class='btn btn-link' type='button' id='leia_menos_analises' aria-hidden='true'> <i>leia menos &raquo;</i></button>
			</spam>";
	
	$texto = "<p>Os fenômenos sociais são verdadeiras forças da natureza, tanto pela singularidade quanto pelas proporções que podem vir a alcançar. Singular pelas particularidades intrínseca de cada evento, onde, apesar de serem semelhantes em forma, diferem nas motivações e objetivos; as circunstâncias originadoras deste tipo de evento, caracterizam-se por um menor ou maior grau de certeza frente aos problemas abordados. Visando alcançar os objetivos e o propósito de nosso trabalho, disponibilizamos análises, projeções e outros meios disponíveis para destacar dados significativos do universo digital. Diferentemente do mundo analógico, onde mudanças podem ser facilmente vislumbradas, no digital isso não é tão fácil. Assim, somente através de dados técnicos e o conhecimento de como empregá-los, as pessoas podem entender os riscos da vida on-line, possibilitando evitar os perigos existentes. $btn</p>";
	
	
	
	if( $status == "MENOS"){
		
		if( strlen($texto) > 500) { $texto = substr($texto,0,500); $texto.="..."; }
		$btn = "<spam style='color:white;'>
					<button class='btn btn-link' type='button' id='leia_mais_analises' aria-hidden='true'> <i>continue lendo &raquo;</i></button>
				</spam>";
		
	}else{$btn = "";}
	
	$vReturnData = "$texto $btn";
	
}elseif( $vAction == "cards_analises_projecoes"){	

	$cards = "<div class='row'>
				<div class='col-sm-6'>
					<div class='card' style='width: 18rem;'>
						<img class='card-img-top' src='img/analises.png' alt='analises'>
						<div class='card-body'>
							<h5 class='card-title'>ANÁLISES QUALITATIVAS</h5>
							<!--<p class='card-text' style='text-align:justify;font-size:0.8em;'>Análises desenvolvidas por pesquisas qualitativas.</p>-->
							<center><a href='#' class='btn btn-primary'>conheça</a></center>
						</div>
					</div>
				</div>
			  </div>
			  
			<div class='row'>
				<div class='col-sm-6'>
					<div class='card' style='width: 18rem;'>
						<img class='card-img-top' src='img/analises.png' alt='analises'>
						<div class='card-body'>
							<h5 class='card-title'>ANÁLISES QUALITATIVAS</h5>
							<!--<p class='card-text' style='text-align:justify;font-size:0.8em;'>Análises desenvolvidas por pesquisas qualitativas.</p>-->
							<center><a href='#' class='btn btn-primary'>conheça</a></center>
						</div>
					</div>
				</div>
			  </div>			
			
			
	";


	$vReturnData = "$cards";
	
}elseif( $vAction == "carrega_nossos_livros"){	
	$status = $_REQUEST["status"];

	$capa= "";
	
	$texto = " <div id='img-capa' class='nossos_livros_item'> </div>		   
			   <div id='desc-livro' class='nossos_livros_item'>
					<h3><b><a id='link-livro' href='./pages/pgs.php?act=crimes_universo_digital'>E-BOOK: CRIMES NO UNIVERSO DIGITAL</a></b></h3>
					<h4>Sobre os crimes praticados na internet:</h4>
					<ul>
						<li>Aspectos legais</li>
						<li>Crimes comuns, puros e mistos</li>
						<li>Legislação específica</li>
					</ul>
					
					<p>O número de computadores comprometidos no Brasil cresceu 168% em comparação ao ano de 2019. Claramente existe uma migração das tentativas de fraudes que até então eram executadas em cima de servidores e ativos de redes, para o nível de seus usuários ou clientes. Isso se explica pelo fechamento de vulnerabilidades antes exploradas pelos criminosos digitais, obrigando-os a mudarem o perfil de seus ataques, redirecionando-os aos elementos mais vulneráveis de qualquer sistema informático: seus usuários.</p>
					<p>Relatório divulgado pela empresa de Segurança Fortinet, afirmou que ocorreram 15 bilhões de tentativas de ataques cibernéticos, nos meses de abril a junho de 2019. Este estudo apontou o Brasil como sendo um importante alvo mundial para criminosos digitais, destacando que as ameaças oriundas da internet estão crescendo em ritmo alarmante, tanto em quantidade quanto em sofisticação. </p>
					<p>Uma questão desponta de forma uníssona: O Brasil está preparado para regular o uso da internet no país? Este trabalho tem por norte identificar os crimes digitais, seus tipos e efeitos, bem como elencar a legislação existente para coibir e punir estas práticas.</p>
			   
					<p style='color:white;'>
						<button class='btn btn-outline-primary' type='button' id='leia_menos'><i class='fas fa-book-reader' aria-hidden='true'></i> Leia menos &raquo;</button>
					    <a class='btn btn-success' href='https://www.amazon.com.br/dp/B08C3VR53C' type='button'><i class='fab fa-amazon'></i> Veja na Amazon &raquo;</a>
					</p>
			   
			   </div> 
			   
			   
			  
		
	";
	
	if( $status == "MENOS"){
		
		if( strlen($texto) > 450) { $texto = substr($texto,0,450); $texto.="..."; }
		$btn = "<p style='color:white;'>
					<button class='btn btn-outline-primary' type='button' id='leia_mais'><i class='fas fa-book-reader' aria-hidden='true'></i> Leia mais &raquo;</button>
					<a class='btn btn-outline-danger' href='https://www.amazon.com.br/dp/B08C3VR53C' type='button'>R$ 8,97 &raquo;</a>
				</p>";
		
	}else{$btn = "";}
	
	
	$vReturnData = "$capa $texto $btn";
	
}elseif( $vAction == "carrega_pagina_analises"){
	
	$data = "PÁGINA DE ANÁLISES DE DADOS CONSOLIDADOS";
	
	
	$vReturnData = "$data";	
	
}elseif( $vAction == "carrega_aviso_cookies"){
	
	$btn  = "<button id='aceitar_cookie' class='btn btn-success' type='button'>ACEITAR</buton>";
	//$btn  = "<button id='aceitar_cookie' class='btn btn-link link' type='button'><i>ACEITAR</i></buton>";
	$data = "<p>Nós usamos <b>cookies</b> e outras tecnologias semelhantes para melhorar a sua experiência em nossos serviços, personalizar publicidade e recomendar conteúdo de seu interesse. Ao utilizar nossos serviços, você concorda com tal monitoramento. Informamos ainda que atualizamos nossa Política de Privacidade. Conheça nosso <a href='./pages/pgs.php?action=termo_privacidade'>Portal da Privacidade</a> e veja a nossa nova Política.</p>	
			 <center>$btn</center> ";
	
	
	//$divs = "<div id='texto_cookie'>$data</div> <div id='botao_cookie'>$btn</div>";
	$divs = "<div id='texto_cookie'>$data</div>";
	
	$vReturnData = "$divs";	
	

}elseif( $vAction == "carrega_pagina_termo_privacidade"){
	
	$data = "<h2>POLÍTICA DE PRIVACIDADE: <a href='//evidenciasdigitais.com.br'>EVIDÊNCIAS DIGITAIS</a></h2>
			<p>Todas as suas informações pessoais recolhidas, serão usadas para o ajudar a tornar a sua visita no nosso site a mais produtiva e agradável possível.</p>
			<p>A garantia da confidencialidade dos dados pessoais dos utilizadores do nosso site é o principal compromisso para o Evidências Digitais. Não fornecemos informações pessoais que porventura sejam armazenadas, a não ser por força de lei e para instruir procedimentos policiais e/ou judiciais.</p>
			<p>Todas as informações pessoais relativas a membros, assinantes, clientes ou visitantes que usem o Evidências Digitais serão tratadas em concordância com a <b>Lei Geral de Proteção de Dados Pessoais - LGPD(Lei n. 13.709/2018)</b>.</p>
			<p>A informação pessoal recolhida pode incluir o seu nome, e-mail, número de telefone fixo e/ou celular, moradia, data de nascimento e/ou outros. Sempre com a devida orientação e autorização prévia.</p>
			<p>O uso do site Evidências Digitais, bem como dos produtos e serviços ofertados, pressupõe a aceitação deste Acordo de privacidade. A equipe do Evidências Digitais reserva-se no direito de alterar este acordo sem aviso prévio. Deste modo, recomendamos que consulte a nossa política de privacidade com regularidade de forma a estar sempre atualizado.</p>
			<h3>Os anúncios</h3>
			<p>Tal como outros websites, coletamos e utilizamos informações contida nos anúncios. A informação contida nos anúncios, inclui o seu endereço IP (Internet Protocol), o seu ISP (Internet Service Provider, como o Sapo, Clix, ou outro), o browser que utilizou ao visitar o nosso website (como o Internet Explorer ou o Firefox), o tempo da sua visita e que páginas visitou dentro do nosso website.</p>
			<h3>Cookie DoubleClick Dart</h3>
			<p>O Google, como fornecedor de terceiros, utiliza cookies para exibir anúncios no nosso website;</p>
			<p>Com o cookie DART, o Google pode exibir anúncios com base nas visitas que o leitor fez a outros websites na Internet;</p>
			<p>Os utilizadores podem desativar o cookie DART visitando a Política de <a href='http://politicaprivacidade.com/' title='privacidade da rede de conteúdo'>privacidade da rede de conteúdo</a> e dos anúncios do Google.</p>
			<h3>Ligações a Sites de terceiros</h3>
			<p>O Evidências Digitais possui ligações para outros sites, os quais, a nosso ver, podem conter informações / ferramentas úteis para os nossos visitantes. A nossa política de privacidade não é aplicada a sites de terceiros, pelo que, caso visite outro site a partir do nosso deverá ler a politica de privacidade do mesmo.</p>
			<p>Não nos responsabilizamos pela política de privacidade ou conteúdo presente nesses mesmos sites.</p>
			";
	$btn  = "<center><button id='aceitar_termo_privacidade' class='btn btn-success btn-lg' type='button'>ACEITAR</buton></center>";
	
	$chk = "<div class=form-group form-check' style='margin-left:20px;'>
				<input type='checkbox' class='form-check-input' id='termo_aceite' name='termo_aceite'>
				<label class='form-check-label' for='termo_aceite'><i>Confirmo que tomei ciência e aceitei os termos acima.</i></label>
				<spam id='dados_aceite'></spam>
			</div>";
	
	$divs = "<div id='texto_cookie'>$data</div> <div id='botao_cookie'>$chk $btn</div>";
	
	$vReturnData = "$divs";	
	
}




 print $vReturnData;

?>