
	let descargarPonentes = function(){
		$.getJSON("server/json.php", {ponentes: ""},function(data){
			$.each(data, function(index, element){
				crearEstructuraPonentes(element);
			});
		});
	}

	let crearEstructuraPonentes = function(ponente){
		$mainConten = $("<div class='ponente'></div>");
		$content = $("<a href='"+ponente.imagen+"' data-lightbox='roadtrip'><img src="+ponente.imagen+" class='imgPonente'></img></a>").
		add($("<h3 class='nombrePonente'></h3>").text(ponente.nombre).
			add($("<p class='empresaPonente'></p>").text("Trabaja en "+ponente.empresa).
				add($("<div class='redesPonente'><i>t</i><i>ą</i><i>Ľ</i></div>"))));
		$mainConten.append($content);
		$father = $("#ponentes>section").append($mainConten);
	}

	let initPonentes = function(){
		descargarPonentes();
	}
