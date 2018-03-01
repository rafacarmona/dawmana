	let $mainContainer, ventanaActual;
	let efectoCartel = function(){
		// no lo declaro como variable por que solo lo voy a usar aquí.
		// si no lo meto en una fución anonima no se ejecuta después, se ejecuta al mismo tiempo.
    	$("#cartelTitle").delay(1000).hide("pulsate", 1000, function(){
			$("#cartel").hide("fade", 1000);
		});
	}

 	let cargarPagina = function(object){
 		//ocultamos main
 		if(ventanaActual != object.attr("href")){
 			//guardamos la ventana actual.
 			ventanaActual = object.attr("href");
 			//ocultamos el container
	 		$mainContainer.hide("drop", 600);
	 		//empezamos a cargar los datos.
	 		setTimeout(function(){
	 			$.get(object.attr("href"), function( data ) {
	  				$mainContainer.html( data );
	  				cargarJs(object.attr('id'));
				});
	 			$mainContainer.show("drop");
	 		}, 500);
 		}
 	}

 	//aqui vamos a aprovechar y cambiar el css del boton.
 	let cargarJs = function(pagina){
 		cambiarBotones(pagina);
 		switch(pagina){
			case 'logPon':
 				return initLogPon();
 			case 'inicio':
 				return initInicio();
 			case 'asistentes':
 				return initAsistentes();
 			case 'ponentes':
 				return initPonentes();
 		}
 	}

 	let cambiarBotones = function(pagina){
 		$("#menuPrincipal a").css("text-shadow", "0px 0px 0px #000").css("color", "#fff");
 		$("#"+pagina).css("text-shadow", "1px 1px 1px #c1c1c1").css("color", "#ffd700");
 	}

	let init = function(){
		//inicializamos la variable de error.
		$mainContainer = $("main");
		efectoCartel();
		$("nav>ul>li").children().on("click", function(event){
			event.preventDefault();
			cargarPagina($(this));
		});
		cargarPagina($("#inicio"));
	}

	$(init);
