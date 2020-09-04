$(document).ready(function(){
	
	//coloca a pagina no inicio
	position_page("#div_barra");
	
		
/* ***********************************************************************************************************

                    FUN합ES GERAIS

*************************************************************************************************************/
	exibe_aviso_cookie();
	function exibe_aviso_cookie(){
		//var decodedCookie = decodeURIComponent(document.cookie);
		var decodedCookie = document.cookie;
		var v = decodedCookie.split("=");
		
		if( v[1] == undefined ){
		
			$.get('controle-dados.php?action=carrega_aviso_cookies',
				function(data){
						
					$("#div_aviso_cookie").html(data);
						$("#botao_cookie").click(function(){
							
							$("#div_aviso_cookie").css("display","none");
							document.cookie="acesso=visitante";
							
						});
						
				});
		}
		
	};
	

	(function(){
		
		var target = $(".anime_left,  .anime_top"),
	                  animationClass = 'anime-start',
				      offset = $(window).height() * 3/4;
		function animeScroll(){
		
				var documentTop = $(document).scrollTop();
				
				target.each(function(){
					
					var itemTop = $(this).offset().top;
					
					if( documentTop > itemTop - offset ){
						
						$(this).addClass(animationClass);
						
					}else{
						
						$(this).removeClass(animationClass);
						
					}
					
				});
			   
		  };
	
		animeScroll();
		 $(document).scroll(function(){
			 
			 animeScroll();
			 
		 });
	
	}());
	
/*
		BOTAO PARA SUBIR AO INICIO DA PAGINA
		
	******************************************************************/
	$("#div_sobe_pagina").html("<div class='box' title='subir ao inicio da pagina.'><span><center> <i class='fas fa-angle-up'></i></center></span>	</div>");
	$(".box").hide();
	$(window).scroll(function(){
		
		if( $(this).scrollTop() > 5 ){
			
			$(".box").fadeIn();
			
		}else{
			
			$(".box").fadeOut();
			
		}
		
	});
	
	$(".box").click(function(){
							
		//$(window).scrollTop( 0 );
		  $("html, body").animate({
				  
				  scrollTop: 0
				  
			  }, 500);
		
	});

/*
		FUNCAO DE NAVEGACAO DO MENU HAMBURGER
		
----------------------------------------------------------------*/
	
	$(".menu-nav > ul li a" ).click(function(e){
		e.preventDefault();
		
		var id = $(this).attr("href"),
		     targetOffSet = $(id).offset().top;
			  			  
			  $("html, body").animate({
				  
				  scrollTop: targetOffSet
				  
			  }, 500);
		
	});
	
/*
		FUNCAO DE NAVEGACAO ENTRE AS SECTIONS
		
----------------------------------------------------------------*/

	$("#div_cabecalho #cta, #show a, #legislacoes a, #ntrabalhos, #faz_denuncia, #quem_somos a, #nossa_comunidade a, #apresenta_empresa a").click(function(e){
		e.preventDefault();
		
		var id = $(this).attr("href"),
		      targetOffSet = $(id).offset().top,
			  menuHeight = $("#div_barra").innerHeight();
			  
			  $("html, body").animate({
				  
				  scrollTop: targetOffSet - menuHeight
				  
			  }, 500);
		
	});	
	
	
/* *********************************************************************************************************

                FURMUARIO DE E-MAIL

***********************************************************************************************************/
	
	
	
/* ****************************************************************************************************************************************

                FUNCOES PARA A SECAO: "APRESENTACAO"

*******************************************************************************************************************************************/
	dados_apresentacao();
	function dados_apresentacao(){
		$.get('controle-dados.php?action=carrega_apresentacao',
			function(data){
					
				$("#APRESENTACAO_SITE").html(data);
					
					
			});
	};


/* ****************************************************************************************************************************************

                FUNCOES PARA A SECAO: "LEGISLA합ES, MANUAIS E RELATORIOS"

*******************************************************************************************************************************************/	
	dados_legislacoes_manuais();
	function dados_legislacoes_manuais(){
		$.get('controle-dados.php?action=carrega_relatorios_e_legislacoes',
			function(data){
					
				$("#LEGISLACOES_E_MANUAIS").html(data);
				botoes_legislacoes();
				
					
					
			});
	};
	
	function botoes_legislacoes(){
		
		$(".botao-legis").click(function(){			
			var tipo = $(this).attr("id");
			
			carregando("#LEGISLACOES_E_MANUAIS");
			$.get('controle-dados.php?action=carrega_legislacoes_manuais&tipo='+tipo,
				function(data){
						
					$("#LEGISLACOES_E_MANUAIS").html(data);
					volta_legislacoes_manuais();						
					posiciona_dados("#LEGISLACOES_E_MANUAIS");
					
					
				});
						 
					
		});
		
		
	};
	
	function volta_legislacoes_manuais(){
		
		$("#volta_legis").click(function(){
			
			carregando("#LEGISLACOES_E_MANUAIS");
			dados_legislacoes_manuais();
			posiciona_dados("#legislacoes");
			
			
		});	
		
	};
	
	function posiciona_dados(posicao){
		
		var targetOffSet = $(posicao).offset().top;
			 			  
			$("html, body").animate({
				  
				scrollTop: targetOffSet
				  
			}, 500);
				
	};
	
/* *********************************************************************************************************

               FUNCOES PARA A SECAO: "AN핶ISES & PROJE합ES"

***********************************************************************************************************/
	
	analises_projecoes("MENOS");
	function analises_projecoes(status){
		$.get('controle-dados.php?action=texto_analises_projecoes&status='+status,
			function(data){
					
				$("#NOSSAS_ANALISES").html(data);
				botoes_analises();
					
			});
					
			
	};
	
	function botoes_analises(){
		$("#leia_mais_analises").click(function(){
			analises_projecoes("MAIS");
			position_page("#analises");
			
		});
		$("#leia_menos_analises").click(function(){
			analises_projecoes("MENOS");
			position_page("#analises");
			
		});
			
	};




/* ****************************************************************************************************************************************

                FUNCOES PARA A SECAO: "NOSSOS LIVROS"

*******************************************************************************************************************************************/	
	nossos_trabalhos_livros("MENOS");
	function nossos_trabalhos_livros(status){
		$.get('controle-dados.php?action=carrega_nossos_livros&status='+status,
			function(data){
					
				$("#NOSSOS_LIVROS").html(data);
				botoes();
				imagem_modal();
				abre_pages_livro("crimes_universo_digital");
					
			});
			
			
			
			
	};
	
	function abre_pages_livro(nome_livro){
		
		
		
	};
	
	function botoes(){
		$("#leia_mais").click(function(){
			
			nossos_trabalhos_livros("MAIS");
			position_page("#ebooks");
			
		});
		$("#leia_menos").click(function(){
			
			nossos_trabalhos_livros("MENOS");
			position_page("#ebooks");
			
		});
			
	};
	
	function imagem_modal(){
		
		$("#img-capa").click(function(){			
						
			var wid = ( $(window).width() / 2 );
			if(wid < 500){
				
				wid = ( $(window).width() / 2 + 100);
				
			}
			
			var img = "<img src='img/outra/trabalho_livros.png' width='"+wid+"' alt='livro:crimes no universo digital'>";
			maskOnTop(img);
			position_page("#ebooks");
			
		});		
		
	};
	

/* ****************************************************************************************************************************************

                 FUNCOES PARA A SECAO: "QUEM SOMOS"

*******************************************************************************************************************************************/	

	dados_quem_somos();
	function dados_quem_somos(){
		$.get('controle-dados.php?action=carrega_quem_somos',
			function(data){
					
				$("#QUEM_SOMOS").html(data);
							
			});
			
			/*$.get('controle-dados.php?action=carrega_nossos_trabalhos',
			function(data){
					
				$("#QUEM_SOMOS").html(data);
				//botoes_trabalhos();
				
					
					
			});*/
			
			
			
	};


/* ****************************************************************************************************************************************

                 FUNCOES PARA A SECAO: "COMO DENUNCIAR"

*******************************************************************************************************************************************/	

	dados_como_denunciar();
	function dados_como_denunciar(){
		$.get('controle-dados.php?action=carrega_como_denunciar',
			function(data){
					
				$("#FAZER_DENUNCIAS").html(data);
				botoes_como_denunciar();	
					
			});
	};

	function botoes_como_denunciar(){		
		
		$(".botao-denuncia").click(function(e){
			e.preventDefault();
			
				var tipo = $(this).attr("id");
				if( tipo == "como_proceder"){
					carregando("#FAZER_DENUNCIAS");
					$.get('controle-dados.php?action=carrega_como_denunciar_procedimentos',
						function(data){
								
							$("#FAZER_DENUNCIAS").html(data);
							volta_como_denunciar();	
								
						});
					
				}
				if(tipo == "especializadas"){
					carregando("#FAZER_DENUNCIAS")
					$.get('controle-dados.php?action=carrega_como_denunciar_especializadas',
						function(data){
								
							$("#FAZER_DENUNCIAS").html(data);
							volta_como_denunciar();	
								
						});
					
				}	
				if(tipo == "uteis"){
					carregando("#FAZER_DENUNCIAS")
					$.get('controle-dados.php?action=carrega_como_denunciar_uteis',
						function(data){
								
							$("#FAZER_DENUNCIAS").html(data);
							volta_como_denunciar();	
								
						});
					
				}

				function volta_como_denunciar(){
		
					$("#volta_denuncias").click(function(){
						
						carregando("#FAZER_DENUNCIAS");
						dados_como_denunciar();
						
						
						
					});	
		
				};
		
	
		});	
		
		
	};




/* ****************************************************************************************************************************************

                 FUNCOES PARA A SECAO: "NOSSA COMUNIDADE"

*******************************************************************************************************************************************/	

	dados_nossa_comunidade();
	function dados_nossa_comunidade(){
		$.get('controle-dados.php?action=carrega_nossa_comunidade',
			function(data){
					
				$("#NOSSA_COMUNIDADE").html(data);
					
					
			});
	};
		

/* ******************************************************************************

                FUNCOES DA SE플O DE AJUDA

********************************************************************************/
		
	dados_uteis();
	function dados_uteis(){
		$.get('controle-dados.php?action=secao_ajuda_dados_uteis',
			function(data){
					
				$("#DADOS_UTEIS").html(data);
					
					
			});
	};	
		
	dados_tools();
	function dados_tools(){
		$.get('controle-dados.php?action=secao_ajuda_dados_tools',
			function(data){
					
				$("#DADOS_TOOLS").html(data);					
					
			});
	};	
		
	
	
	
/* ******************************************************************************

                 FUNCOES PARA A SECAO: "CONHECA O BLOG"

********************************************************************************/

	dados_destaque_blog();
	function dados_destaque_blog(){
		$.get('controle-dados.php?action=carrega_destaques_blog',
			function(data){
					
				$("#NOSSO_BLOG").html(data);
					
					
			});
	};
		
		
/* *****************************************************************************************************************
                                                   FUN합ES GERAIS 
********************************************************************************************************************/
	function carregando(container) {
		$(container).html('<center><img src="img/loading.gif" id="carregando" /></center>');
	};
	
	//FUNCAO PARA POSICIONAR A PAGINA EM UM LOCAL ESPECIFICO:
	//recebe o nome da DIV que pretende deslocar.
	//EXEMPLO: position_page("#nome_da_div");
	
	function position_page(position){
		
		var targetOffSet = $(position).offset().top;		
			  
		$("html, body").animate({
				  
				  scrollTop: targetOffSet
				  
			  }, 300);
			
	};
	
	function maskOnTop(data) {
		$('.mask').remove();
	
		$('body').after("<div id='mask' class='mask'> </div>");
		$('body').after("<div id='mask-container' class='mask'> </div>");
		carregando("#mask-container");
		$('#mask-container').html(data);
		$('#mask-container').css('border-radius','5px');
		
		var left = ($(window).width() /2) - ( $("#mask-container").width() / 2 );
        var top = ($(window).height() / 2) - ( $("#mask-container").height() / 2 );
     
        $("#mask-container").css({'top':top,'left':left});
		
		$('#mask').click(maskClose);
		
	};
	
	var maskClose = function() {
			$('.mask').remove();
	};
		
	
});