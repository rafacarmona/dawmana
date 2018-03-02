<?php
/*		*/
$mostrarPonentes = array(
	array("nombre" => "José Ignacio Álvarez Ruiz", "empresa" => "empresa nº1", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2014/02/03jialvarez-2-1.jpg"),
	array("nombre" => "Rafael Mellado y Daniel Gestino", "empresa" => "Lourdes Entreprise", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/RafaMellado_DanielGestino.jpg"),
	array("nombre" => "Javier Carazo Gil", "empresa" => "empresa WooCommerce", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/FcoJavierCarazo_400x400.jpeg"),
	array("nombre" => "Miguel Ángel Arroyo", "empresa" => "empresa binaria", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2017/05/MiguelAngel_Arroyo-1-e1504773318775.jpg"),
	array("nombre" => "José Huertas y JL García", "empresa" => "Dobuss", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2017/05/dobuss-e1504774150983.jpeg"),
	array("nombre" => "Nicolás García Pedrajas", "empresa" => "UCO", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2014/02/10nicolasgarcia-150x150-1.jpg"),
	array("nombre" => "Javier Jiménez", "empresa" => "GrayHats", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/logo_grayhtats_400x400.png"),
	array("nombre" => "Javier Aguirre", "empresa" => "chatbot S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/JavierAguirre_400x400.jpg"),
	array("nombre" => "Cristina Santamaria", "empresa" => "Chatbot S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/CristinaSantamarina_400x400.jpg"),
	array("nombre" => "Raúl Valentín", "empresa" => "Machine Learning S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2017/09/RaulValentin.jpg"),
	array("nombre" => "Manuel Jiménez", "empresa" => "CoSpace S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/ManuelJimenez_400x400_2018.jpg"),
	array("nombre" => "Innovation Group", "empresa" => "Innovation Group", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/Logo_Innovation_Group400x400.png"),
	array("nombre" => "Juan Antonio Romero", "empresa" => "Rest S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/JuanAntonioRomero2018_400x400.jpg"),
	array("nombre" => "Álvaro Serrano", "empresa" => "RealidadAumentada S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2017/05/Alvaro_Serrano-e1504772858793.jpg"),
	array("nombre" => "Ana María Cuenca", "empresa" => "ASIR", "imagen" => "https://pbs.twimg.com/profile_images/840223122347417601/5cpRWZxM_400x400.jpg"),
	array("nombre" => "María Moreno", "empresa" => "ASIR", "imagen" => "https://pbs.twimg.com/profile_images/959186057895071744/N_JBQ54L_400x400.jpg"),
	array("nombre" => "Soledad Cruz ", "empresa" => "DAW", "imagen" => "https://pbs.twimg.com/profile_images/823882096598990848/sYkDNg4Q_400x400.jpg"),
	array("nombre" => "Nieves Borrero", "empresa" => "ASIR", "imagen" => "https://pbs.twimg.com/profile_images/932568217243004928/4YEztabj_400x400.jpg")
);

$ponentes = array(
	"Lunes"=>
	array(
		array("nombre" => "José Ignacio Álvarez Ruiz", "empresa" => "empresa nº1", 
			"imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2014/02/03jialvarez-2-1.jpg", "tipoActividad" => "Ponencia", "actividad" => "Sistemas de control de versiones distribuidas", "duracion" => "8:30 - 9:45", "lugar" => "SUM", "descripcion" => "Se mostrarán los comandos de git sobre repositorios de ejemplo reales de forma interactiva. También se darán sus alternativas sobre interfaz gráfica y se comentarán las estrategias de merge más efectivas."),

		array("nombre" => "José Ignacio Álvarez Ruiz", "empresa" => "empresa nº1", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2014/02/03jialvarez-2-1.jpg", "tipoActividad" => "Ponencia", "actividad" => "Servicios web con Python + web.py", "duracion" => "9:45 - 10:45", "lugar" => "SUM", "descripcion" => "Se repasará la descripción de servicios Web y tecnologías SOAP/REST. A continuación, se presenta el microframework web.py desarrollado por Aaron Swartz para la generación y despliegue de servicios Web."),

		array("nombre" => "Javier Carazo Gil", "empresa" => "empresa WooCommerce", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/FcoJavierCarazo_400x400.jpeg", "tipoActividad" => "Ponencia", "actividad" => "WooCommerce: crea tu propia tienda online", "duracion" => "11:45 - 12:45", "lugar" => "SUM", "descripcion" => "WooCommerce es el estándar de facto para crear tiendas online a día de hoy. Sus ventajas son muchas, pero hay dos que destacan, la primera de ellas es que usa WordPress (el CMS que da servicio a más del 25% de todo Internet)."),
		
		array("nombre" => "Rafael Mellado y Daniel Gestino", "empresa" => "Lourdes Entreprise", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/RafaMellado_DanielGestino.jpg", "tipoActividad" => "Taller", "actividad" => "Introducción Angular 5 y Angular Material", "duracion" => "12:20 - 13:20", "lugar" => "T116", "descripcion" => "Realizaremos un taller de iniciación en Angular 5 y Angular Material en el que explicaremos las características más importantes de angular para los principiantes y haremos un taller guiado con una búsqueda “en caliente” de diferentes elementos, añadiendo y eliminando dichos elementos.")
		),
	"Martes"=>
	array(
		array("nombre" => "Miguel Ángel Arroyo", "empresa" => "empresa binaria", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2017/05/MiguelAngel_Arroyo-1-e1504773318775.jpg", "tipoActividad" => "Ponencia", "actividad" => "Introducción al análisis de binarios", "duracion" => "10:00 - 11:30", "lugar" => "SUM", "descripcion" => "El objetivo de la charla es el de introducir a los asistentes en el análisis de binarios, uno de las áreas más complejas y potentes del cambo de la seguridad informática, indicando en qué campos de la seguridad es útil este conocimiento y se hará una demostración práctica con el análisis de varios binarios."),

		array("nombre" => "José Huertas y JL García", "empresa" => "Dobuss", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2017/05/dobuss-e1504774150983.jpeg", "tipoActividad" => "Ponencia", "actividad" => "Digital MKG: herramientas para analizar webs", "duracion" => "12:00 - 13:00", "lugar" => "SUM", "descripcion" => "Repaso de herramientas usadas en el Marketing Digital para analizar webs"),


		array("nombre" => "Nicolás García Pedrajas", "empresa" => "UCO", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2014/02/10nicolasgarcia-150x150-1.jpg", "tipoActividad" => "Ponencia", "actividad" => "Deep-Learning", "duracion" => "13:00 - 14:30", "lugar" => "SUM", "descripcion" => "Aprendizaje automático basados en asimilar representaciones de datos. En este paradigma los algoritmos son capaces de aprender sin intervención humana previa, sacando ellos mismos las conclusiones acerca de la semántica embebida en los datos.")
		),
	"Miércoles"=>
	array(
		array("nombre" => "Javier Jiménez", "empresa" => "GrayHats", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/logo_grayhtats_400x400.png", "tipoActividad" => "Ponencia", "actividad" => "Cloud computing y AWS", "duracion" => "8:30 - 9:00", "lugar" => "SUM", "descripcion" => "Charla sobre cloud computing, amazon web services y salidas profesionales"),

		array("nombre" => "Javier Aguirre", "empresa" => "chatbot S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/JavierAguirre_400x400.jpg", "tipoActividad" => "Ponencia", "actividad" => "ChatBots", "duracion" => "12:30 - 13:30", "lugar" => "SUM", "descripcion" => "Chatbots! Todo el mundo habla de ellos, pero qué son y por dónde empezar? Veremos de dónde vienen los chatbots y cómo empezar a implementar uno"),

		array("nombre" => "Cristina Santamaria", "empresa" => "Chatbot S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/CristinaSantamarina_400x400.jpg", "tipoActividad" => "Taller", "actividad" => "Taller sobre Bots 102", "duracion" => "13:30 - 14:30", "lugar" => "SUM", "descripcion" => "Aprenderemos a diseñar un chatbot con Chatfuel y Dialogflow")
		),
	"Jueves"=>
	array(
		array("nombre" => "Raúl Valentín", "empresa" => "Machine Learning S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2017/09/RaulValentin.jpg", "tipoActividad" => "Ponencia", "actividad" => "Cómo construir un modelo predictivo con Machine Learning", "duracion" => "8:30 - 9:20", "lugar" => "SUM", "descripcion" => "Entre todos construiremos un modelo predictivo. Un grupo de alumnos será nuestro conjunto de datos de entrenamiento con los que entrenaremos el modelo. Una vez construido el modelo otro grupo de alumnos lo testeará y determinaremos su rendimiento. Finalmente veremos un modelo real aplicado en San Juan de Dios para predecir el absentismo a consulta"),

		array("nombre" => "Manuel Jiménez", "empresa" => "CoSpace S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/ManuelJimenez_400x400_2018.jpg", "tipoActividad" => "Taller", "actividad" => "Producción de realidad virtual", "duracion" => "9:20 - 11:20", "lugar" => "SUM", "descripcion" => "Taller introductorio al uso de CoSpaces, una herramienta web que permite de forma sencilla y directa producir escenas inmersivas e interactivas, usar modelos 3D predefinidos o incorporar los propios y pudiendo programar los eventos con un lenguaje de bloques o directamente con código."),

		array("nombre" => "Alvaro Mesa , Raul Zarza y Antonio Arteche (Innovation Group)", "empresa" => "Innovation Group", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/Logo_Innovation_Group400x400.png", "tipoActividad" => "Ponencia", "actividad" => "Testing en el marco de trabajo Scrum", "duracion" => "13:00 - 14:00", "lugar" => "SUM", "descripcion" => "Charla sobre las fases de vida de desarrollo software en el marco de Scrum y las actividades que un tester lleva a cabo en cada una de ellas para asegurar la calidad del software")
		),
	"Viernes"=>
	array(
		array("nombre" => "Juan Antonio Romero", "empresa" => "Rest S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/JuanAntonioRomero2018_400x400.jpg", "tipoActividad" => "Ponencia", "actividad" => "Iniciación al desarrollo de servicios REST", "duracion" => "8:15 - 9:15", "lugar" => "T115", "descripcion" => "Introducción al desarrollo de una REST API. Veremos los motivos para desarrollar aplicaciones con esta arquitectura y la teoría para llevarlo a cabo, tratando de seguir las buenas prácticas. Después se mostrará un ejemplo básico desarrollado con Django. Se ha habilitado la compatibilidad con el lector de pantalla."),

		array("nombre" => "Álvaro Serrano", "empresa" => "RealidadAumentada S.L.", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2017/05/Alvaro_Serrano-e1504772858793.jpg", "tipoActividad" => "Taller", "actividad" => "Realidad Aumentada con WebGL", "duracion" => "12:15 - 14:15", "lugar" => "T116", "descripcion" => "En el taller de WebGL de este año crearemos una sencilla aplicación de Realidad Aumentada utilizando tecnologías web, gracias a frameworks de código abierto como A-Frame y AR.js"),

		array("nombre" => " Ana María Cuenca, María Moreno, Nieves Borrero, Soledad Cruz", "empresa" => "DAW y ASIR", "imagen" => "http://informatica.iesgrancapitan.org/wp-content/uploads/2018/01/Brecha_digital_sysmana2018.jpg", "tipoActividad" => "Ponencia", "actividad" => "¿Igualdad de género en el mundo tecnológico?", "duracion" => "10:00 - 10:45", "lugar" => "SUM", "descripcion" => "¿Existe la desigualdad de género en el mundo tecnológico o, por el contrario, la tecnología reduce la desigualdad entre hombres y mujeres?")
		)
	);

$ponentesLogin = array(
	"nachete"=>array("nombre"=>"Nacho", "apellidos" => "Álvarez Ruiz" , "empresa" => "Empresa no se cual", "patrocinio" => true, "fechaDesde" => "27/09/2018","fechaHasta" => "20/09/2018", "observaciones" => "Quiero más botellas de agua que Javi Ponferrada", "password" => "38381d700e56823fcc261a4523bb04c6"),
	"lourdes"=>array("usuario" => "Lourdes", "nombre"=>"Lourdes", "apellidos" => "Magarín Corvillo", "empresa" => "Gran capitán", "patrocinio" => false, "fechaDesde" => "27/09/2018", "fechaHasta" => "25/09/2018", "observaciones" => "Te voy a poner un 10 rafa :D", "password" => "1971aec4e766445d8562d4b1037f56f7")
);

$carteles = array("server/SYSM1.jpg", "server/SYSM2.jpg",  "server/SYSM3.jpg",  "server/SYSM4.jpg", "server/SYSM5.jpg", "server/SYSM6.jpg", "server/SYSM7.jpg", "server/SYSM8.jpg", "server/SYSM9.jpg");

if(isset($_GET['data'])){
	print_r(json_encode($ponentes[$_GET['data']]));
}

if(isset($_GET['ponentes'])){
	print_r(json_encode($mostrarPonentes));
}

if(isset($_GET['login'])){
	$existe = false;
	foreach($ponentesLogin as $x => $x_value){
		if($x == $_GET['login']){
			$existe = true;
			break;
		}
	}
	if($existe && $_GET['logpas'] == $ponentesLogin[$_GET['login']]["password"]){
		$devolverArray = array_slice($ponentesLogin[$_GET['login']], 0, -1);
		print_r(json_encode($devolverArray));
	}else{
		print_r(json_encode(array("error"=>"nombre de usuario o contraseña incorrectos.")));
	}
}

if(isset($_GET['cartel'])){
	print_r(json_encode($carteles));
}
?>