
  //objeto patrones
  let patrones = {
    dni: /^(\d{8})[-| ]?([TRWAGMYFPDXBNJZSQVHLCKET]{1})$/i,
    apellidos: /^([A-záéíóúñ]{2,})[ ]{1}([A-záéíóúñ]{2,})$/i,
    email: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*$/i,
    usuarioPonente : /^([A-záéíóúñ]{6,})$/i,
    passwordPonente : /^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040-\.,-])(?=.*[A-Z])(?=.*[a-z])\S{6,}$/,
    nombre : /^([A-záéíóúñ\s*]{3,})$/,
    validateUrl: /^(http(s)?:\/\/[0-9a-zA-Z\.\/_-]+.png)$/i,
    validateNumber: /^(\d){1,3}$/,
    validateDescBreve: /^.{10,100}$/,
    validarFecha : /^(\d\d\/\d\d\/\d{4})$/i
  };

  let test = {
    arrayLetras : ["T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E"],
    testDNI : function(dni){     
      if(patrones.dni.test(dni.trim())){
        //sacamos los grupos.
        let arrayDNI = dni.trim().match(patrones.dni);
        let numero = arrayDNI[1];
        let letra = arrayDNI[2];
        if (letra.toUpperCase() != test.arrayLetras[numero%23]) {
          throw{error: "La letra no coincide con el DNI especificado."}
        }
      }else{
        throw{error: "No es un DNI válido."}
      }
    },
    testInput: function(value, patron, err){
      if (!patron.test(value.trim()))
        throw {error: err}
    }
  };

  let comprobar = function(){
    let regex, err;//no se otra menara de sacar los patrones.
      switch($(this).attr("id")){
        case 'nombre':
        case 'nombrePonenteLog':
        case 'empresaPonenteLog':
        case 'nombreActividad':
          regex = patrones.nombre;
          err = 'la longitud del nombre debe ser mayor a 3 carácteres.';
        break;
        case 'apellidos':
        case 'apellidosPonenteLog':
          regex = patrones.apellidos;
          err = "Deben ser dos apellidos y deben contener mínimo dos letras cada uno.";
        break;      
        case 'email':
          regex = patrones.email;
          err = "Formato de email incorrecto.";
        break;
        //esto es del login.
        case 'nombrePonente':
          regex = patrones.usuarioPonente;
          err = "El nombre de usuario no cumple los requisitos.";
        break;
        case 'passwordPonente':
          regex = patrones.passwordPonente;
          err = "La contraseña no cumple los requisitos.";
        break;
        case 'descBreveActividad':
          regex = patrones.validateDescBreve;
          err = "La descripción debe contener entre 10 y 100 letras";
        break;
        case 'urlImagenActividad':
          regex = patrones.validateUrl;
          err = "No es una url válida. Recuerda que debe ser un archivo PNG.";
        break;
        case 'numeroAsistentesActividad':
          regex = patrones.validateNumber;
          err = "Debe ser un número entre 1 y 3 cifras.";
        break;
        case 'desdePonenteLog':
        case 'hastaPonenteLog':
          regex = patrones.validarFecha;
          err = "La fecha es incorrecta";
        break;
      }       
      if($(this).prop("id") != 'dni'){
          comprobarYmostrarError($(this), test.testInput, regex, err);
      }else{
        comprobarYmostrarError($(this), test.testDNI);
      }
  }

  let comprobarYmostrarError = function($input, funcion, patron, error){
    try{
      if($input.prop("id") == 'dni'){
        funcion($input.val());
      }else{
        funcion($input.val(), patron, error);
      }
      $input.parent().children("p").children("i").text("").hide("fade");
      }catch(err){
        $input.parent().children("p").children("i").text(err.error).show("fade");     
      }
  }

  let mostrarModal = function(titulo){
    $("#dialogConfirmacion").dialog({
      resizable: false,
      modal: true,
      show: {effect: "fade", duration: 1000},
      hide: {effect: "fade", duration: 1000},
      title: titulo,
      buttons: {
        "Vale": function() {
          $( this ).dialog( "close" );
          //window.location.replace("index.html");
        }
      }
    });
  }

	let initAsistentes = function(){
    $('form>div>input').on("focusout", comprobar);
    $("#botonSubmit").button().on("click", function(event){
      event.preventDefault();
      $('form>div>input').each(comprobar);
      if($("form>div>p").children("i").text() == ""){
        $("#dialogConfirmacion").html("Recuerda traer tu DNI para poder identificarte. <br /> ¡Nos vemos en la Dawmana!");
        mostrarModal("Registrado con éxito.");
      }
    });
  }