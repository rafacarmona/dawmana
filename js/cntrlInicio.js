
	let crearTabs = function(){
		$("#tabs").tabs();
		//sino lo metes en function no funciona el $(this).
		$("#tabs>ul>li").children().one("click", recuperarJson);
	}

	let recuperarJson = function(){
		element = $(this).attr("href");
		$.getJSON("server/json.php", {data: $(this).text()}, function(data){
			//tiene que ir así por que el attr me devuelve "#texto" no un elemento jquery.
			$.each(data, function(index, ponente){
				crearEstructura($(element), ponente);
			});
			//le aplico el acordeon al terminar el bucle. //, active: false.
			$(element).accordion({collapsible: true, active: false});
		});
		//activamos el tooltip.
		 $( document ).tooltip();
	}

	let crearEstructura = function(cajaPadre, ponente){
		//se tiene que crear el acordeon.
		let content = $("<div class='cajaPonentes'></div>").append($("<h2 class='ponenteTitle'></h2>").text(ponente.actividad).
			add($("<img />").attr("src", ponente.imagen)).add($("<div></div>").append($("<div></div>").text("Ponente/s: "+ponente.nombre).
				add($("<div></div>").text("Empresa: "+ponente.empresa)).add($("<div></div>").text("Duración: "+ponente.duracion)).
				add($("<div></div>").text("Lugar: "+ponente.lugar)).
				add($("<div></div>").text("Actividad: "+ponente.tipoActividad))).
			add($("<h4></h4>").text("Descripción")).add($("<p></p>").text(ponente.descripcion)))
		);
		let title = $("<h3></h3>").text(ponente.actividad).attr("title", "Ponente/s: "+ ponente.nombre+"\n Actividad: "+ ponente.actividad+"\n Empresa: "+ponente.empresa).add(content);
		cajaPadre.append(title);
	}

	let initInicio = function(){
		crearTabs();
		//cargamos por defecto.
		$("#lunesButton").click();
	}

