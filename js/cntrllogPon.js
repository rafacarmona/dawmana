	let ponenteLog;
 	let validarLogin = function(){
 		//petición ajax
 		let usuario = $("#nombrePonente").val();
 		let password = $.md5($("#passwordPonente").val());
 		$.getJSON("server/json.php", {login: usuario, logpas: password}, function(data){
 			if(data.error == null){
 				ponenteLog = data;
 				$("#loginError>i").text("").hide("fade");
 				//hacemos acciones login
 				cargarPonenteLog();
 			}else{
 				//mostramos error
 				$("#loginError>i").text(data.error).show("fade");
 			}
		}).fail(function(){
			$("#loginError>i").text("error con la base de datos").show("fade");
		});
 	}

	let cargarPonenteLog = function(object){
 		$mainContainer.hide("drop", 600);
 		//empezamos a cargar los datos.
 		setTimeout(function(){
 			$.get("server/ponenteLogeado.html", function( data ) {
  				$mainContainer.html( data );
  				//initPonenteLog
  				initPonenteLog();
			});
 			$mainContainer.show("drop");
 		}, 500);
 	}
 	
	let initLogPon = function(){
		$('#loginPonenteForm>div>input').on("focusout", comprobar);
		$("#botonLoginPonente").button().on("click", function(event){
	      event.preventDefault();
	      //limpio para hacer la comprobación.
	      $("#loginError>i").text("");
	      $('#loginPonenteForm input').each(comprobar);
	      if($("form>div>p").children("i").text() == "") validarLogin();
    	});
	}

//password user 1. 111Qw.

//password user 2. 222Eq#