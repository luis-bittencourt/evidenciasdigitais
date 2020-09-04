$(document).ready(function(){
	
	topo_pagina();
	function topo_pagina(){
		
		$("html, body").animate({
				  
				  scrollTop: 0
				  
			  }, 500);
		
	};
	
	/*
		BOTÃO PARA SUBIR AO INÍCIO DA PÁGINA
		
	******************************************************************/
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
	
	
	
	
	
	open_page();
	function open_page(){
		
		carregando("#div_pages");
		var pagina = $(window.document.location).attr('href');
		var act = pagina.split('=');
		
		if(act[1] == "preservacao"  ){ var action = "carrega_como_denunciar_procedimentos";}
		if(act[1] == "especializada"){ var action = "carrega_como_denunciar_especializadas";}
		if(act[1] == "orientacoes"  ){ var action = "carrega_como_denunciar_uteis";}
		
		if(act[1] == "legislacoes"){ var action = "carrega_legislacoes_manuais&tipo=legislacoes";}
		if(act[1] == "manuais"){ var action = "carrega_legislacoes_manuais&tipo=legislacoes&tipo=manuais";}
		if(act[1] == "ferramentas"){ var action = "carrega_legislacoes_manuais&tipo=legislacoes&tipo=relatorios";}
		
		if(act[1] == "luis-bittencourt"){ var action = "carrega_quem_somos";}
		
		if(act[1] == "analises"){ var action = "carrega_pagina_analises";}
		if(act[1] == "termo_privacidade"){ var action = "carrega_pagina_termo_privacidade";}
		if(act[1] == "crimes_universo_digital"){ var action = "carrega_nossos_livros&status=mais";}
		
		$.get('../controle-dados.php?action='+action,
			function(data){
				$("#div_pages").css("margin-top","80px");	
				$("#div_pages").html(data);
				//botoes_trabalhos();
				
				$("#quem_somos_imagem").fadeIn("slow");
				
				$("#leia_menos").css("display","none");
				$("#link-livro").click(function(e){
					e.preventDefault();
					//$(window.document.location).attr('href',"../");
					imagem_modal();
				});
				
				

				completa_aceite();
				$("#aceitar_termo_privacidade").click(function(){
					
					var aceite = $("input[name='termo_aceite']:checked").val();
					if( aceite == "on" ){
						
						var data = new Date();
						var dia = data.getDate();
						var mes = data.getMonth();
						var ano = data.getFullYear();
						var hora = data.getHours();
						var min  = data.getMinutes();
						var seg  = data.getSeconds();
						var str_data = dia+"/"+(mes + 1)+"/"+ano
						var str_hora = hora+":"+min+":"+seg
						
						//alert(str_data+" "+str_hora);
						var str_aceite = str_data+" "+str_hora;						
						addAceite("aceito em:"+str_aceite);
						
						alert("OBRIGADO POR ACEITAR!");
						$(window.document.location).attr('href',"../");
						
						
					}else{
						
						if(confirm("Selecione o respectivo campo para confirmar os termos apresentados.")){
							
							$('#termo_aceite').attr("checked","checked");
							//addAceite("aceito");
														
						}else{
							
							delAceite();
							
						}
							
					}
					
				});
				
				
				
				
							
					
			});
		
		
		
	
	};
	
	//completa_aceite();
	function completa_aceite(){
		
		var data = localStorage.getItem('termo');
		//alert(data);
		
		if( data == null ){
				//alert("null");
				$('#termo_aceite').attr("checked", false);
			
		}else{
			//alert(data);
			$('#termo_aceite').attr("checked","checked");
			$("#dados_aceite").html(data);
			
		}
			
	};
	
	
	function addAceite(aceitar){
		
		var dados = {"termo":aceitar };
		localStorage.setItem("termo", dados.termo);
			
	};
	
	function delAceite(){
		
			localStorage.clear();
		
	};	
		
	function imagem_modal(){
		
								
		var wid = ( $(window).width() / 2 );
		if(wid < 500){
				
			wid = ( $(window).width() / 2 + 100);
				
		}
			
		var img = "<img src='../img/outra/trabalho_livros.png' width='"+wid+"' alt='livro:crimes no universo digital'>";
		maskOnTop(img);
		
			
	};	
		
	
	
	/* *****************************************************************************************************************
	
                                    FUNÇÕES DO BOTÃO VOLTAR [ VOLTA AO INDEX ]
									
	********************************************************************************************************************/
	//Função para o botao "VOLTAR"
	$("#voltar").click(function(){
		
			var destino='../';
			$(window.document.location).attr('href',destino);
		
						
	});
	
	
	
	
	
	
	
	/* *****************************************************************************************************************
	
                                                   FUNÇÕES GERAIS 
												   
	********************************************************************************************************************/
	function carregando(container) {
		$(container).html('<center><img src="../img/loading.gif" id="carregando" /></center>');
	};
	
	
	
	function maskOnTop (data) {
		$('.mask').remove();
	
		$('body').after("<div id='mask' class='mask'> </div>");
		$('body').after("<div id='mask-container' class='mask'> </div>");
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