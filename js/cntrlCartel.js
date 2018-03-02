
	let descargarSysmanas = function(){
		$.getJSON("server/json.php", {cartel: ""},function(data){
			console.log(data);
			$.each(data, function(index, element){
				console.log(element);
				crearEstructuraSysm(element);
			});
		});
	}

	let crearEstructuraSysm = function(cartel){
		$mainConten = $("<div class='sysmanaCartel'></div>");
		$content = $("<a href='"+cartel+"' data-lightbox='roadtrip'><img src="+cartel+" class='imgPonente'></img></a>");
		$mainConten.append($content);
		$father = $("#sysmana>section").append($mainConten);
	}

	let initSysmanas = function(){
		descargarSysmanas();
	}
