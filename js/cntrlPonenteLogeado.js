 	//ahora cargariamos el html del editar ponente y actividad.
 	let rellenarInputs = function(){
 		if(ponenteLog != null){
 			$("#nombrePonenteLog").val(ponenteLog.nombre);
 			$("#apellidosPonenteLog").val(ponenteLog.apellidos);
 			$("#empresaPonenteLog").val(ponenteLog.empresa);
 			$("#patrocinioPonenteLog").prop("checked", ponenteLog.patrocinio);
 			$("#desdePonenteLog").val(ponenteLog.fechaDesde);
 			$("#hastaPonenteLog").val(ponenteLog.fechaHasta);
 			$("#observacionesPonenteLog").text(ponenteLog.observaciones);
 		}
 	}

 	let cargarDatePicker = function(){
		$.datepicker.setDefaults($.datepicker.regional["es"]);
		let dateFormat = "dd/mm/yy",
		    from = $( "#desdePonenteLog" ).datepicker({
		        changeMonth: true,
		        numberOfMonths: 1,
		        minDate: "25/01/2018",
		        maxDate: "29/01/2018" 
		    }).on( "change", function() {
			    to.datepicker( "option", "minDate", getDate( this ));
		    }),
		    to = $( "#hastaPonenteLog" ).datepicker({
		        changeMonth: true,
		        numberOfMonths: 1,
		        minDate: "25/01/2018",
		        maxDate: "29/01/2018" 
		    }).on( "change", function() {
		    	from.datepicker( "option", "maxDate", getDate( this ) );
		});
		   function getDate( element ) {
		    let date;
		    try {
			    date = $.datepicker.parseDate( dateFormat, $(element).val() );
		    } catch( error ) {
		    	date = null;
		    }
		    if($(element).prop("id") === "desdePonenteLog"){
		    	$desde = date;
		    }else{
		    	$hasta = date;
		    }
		    return date;
		   }
 	}

	let initPonenteLog = function(){
		cargarDatePicker();
		$("#tabsPonente").tabs();
		rellenarInputs();
		$('#ponenteLogeado input').on("focusout", comprobar);
		$("#botonEditarPefil").button().on("click", function(event){
	     	event.preventDefault();
	      	$('#editarPonente input[type=text]').each(comprobar);
	      	if($("form>div>p").children("i").text() == ""){
        		$("#dialogConfirmacion").html("Perfil editado con éxito.");
       			mostrarModal("Perfil actualizado");
      		}
    	});
    	
    	$("#crearActividad").button().on("click", function(event){
	      	event.preventDefault();
	      	$('#addActividad input').each(comprobar);
	   	  	if($("form>div>p").children("i").text() == ""){
        		$("#dialogConfirmacion").html("Actividad creada con éxito!");
       			mostrarModal("Actividad creada");
      		}
    	});
	}

//password user 1. 111Qw.

//password user 2. 222Eq#