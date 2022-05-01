<!DOCTYPE html>
<?php
	include("sql_connector.php");

	#Menu
	$sql_menu = "SELECT * FROM menu";
?>
<html lang="es">
<head>
	<meta charset="UTF-8">
    	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" href="css/burbujas.css">
	<link rel="stylesheet" href="css/smartphone.css">
	<title>My Blog</title>
</head>
<body>
	<!--cabeza-->
	<header class="header">
		<!--<div id="encabezado">-->
	    	<div id="logo">
	    		<marquee direction="right">Todo Plus</marquee>
	    	</div>

	    	<div id="menu" >
	    		<ul>
					<?php
						$resultado = mysqli_query($conn, $sql_menu);
						while($filas_menu = mysqli_fetch_assoc($resultado)){
							echo "<li><a href=".$filas_menu["menulink"]." class=".$filas_menu["menuclass"].">".$filas_menu["tabs"]."</a></li>";
						}
					?>
					<!--
	    			<li><a href="" class="active-menu">Home</a></li>
	    			<li><a href="html/Peliculreseña1.html" class="enlace">Peliculas</a></li>
	    			<li><a href="html/videojuegos.html" class="enlace">Videojuegos</a></li>
	    			<li><a href="html/Musica.html" class="enlace">Musica</a></li>
					-->	
				</ul>
	    	</div> 
	    <!--</div>-->
	      <!--EFECTO BURBUJA-->
	    <div class="burbujas">
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    	<div class="burbuja"></div>
	    </div>
	</header>

	<section id="principal">
		<section id="publicaciones">
				<article class="post">

					<a href="html/videojuegos-Imp of the sun.html" class="enlace-post"></h2>
						<h2 class="titulo-post">Imp of the sun: todo lo que tienes que saber.</h2>
					</a>
					<img src="img/imp.jpg" class="img-post">
					<p>
						<strong>Por:</strong><span class="datos-publicaciones">Sunwolf Entertainment</span>
						&nbsp; &nbsp; 
						<strong>Fecha: </strong><span class="datos-publicaciones">01 de Octubre del 2021</span>
					</p>
					<p class="parrafo-post">
						Imp of the Sun es un juego de plataformas de acción en 2D no lineal que combina una exploración y un combate trepidantes en un impresionante mundo inspirado en Perú, desde las brillantes cumbres de las montañas andinas hasta las densas selvas amazónicas, y mucho más.
					</p>

					<a href="html/videojuegos-Imp of the sun.html" class="leer-mas">Leer mas...</a>&nbsp; &nbsp;
					<span class="num-comentarios">20 comentarios</span> 
				</article>

				<!--Articulo principal 2-->
				<article class="post">

					<a href="html/videojuegos-videojuegos-Horizon Forbidden West.html" class="enlace-post">
						<h2 class="titulo-post">Horizon Forbidden West: La sorpresa de PlayStation</h2>
					</a>
					<img src="img/horizon.jpg" class="img-post">
					<p>
						<strong>Por:</strong><span class="datos-publicaciones">Sony Entertainment</span>
						&nbsp; &nbsp; 
						<strong>Fecha: </strong><span class="datos-publicaciones">Martes 23 de Mayo del 2021</span>
					</p>
					<p class="parrafo-post">
						Domar poderosas bestias mecanizadas. La sensación de descubrir y zambullirse en imponentes paisajes naturales y ruinas anteriores al mismísimo apocalipsis.
					</p>

					<a href="html/videojuegos-videojuegos-Horizon Forbidden West.html" class="leer-mas">Leer mas...</a>&nbsp; &nbsp;
					<span class="num-comentarios">14 comentarios</span>
				</article>	 	

				<!--Articulo principal 3-->
				<article class="post">

					<a href="html/Peliculreseña1.html" class="enlace-post">
						<h2 class="titulo-post">Jujutsu Kaisen 0: Reseña</h2>
					</a>
					<img src="https://laverdadnoticias.com/__export/1647887286567/sites/laverdad/img/2022/03/21/jujutsu_kaisen_0_resena_pelicula.jpg_793492074.jpg" class="img-post">
					<p>
						<strong>Por:</strong><span class="datos-publicaciones">Anonimo</span>
						&nbsp; &nbsp; 
						<strong>Fecha: </strong><span class="datos-publicaciones">Lunes 14 de Enero del 2021</span>
					</p>
					<p class="parrafo-post">
						El Mejor Anime del Año 2021 está de regreso con su película Jujutsu Kaisen 0 y nos presenta una nueva perspectiva de los poderosos personajes secundarios.
					</p>

					<a href="html/Peliculreseña1.html" class="leer-mas">Leer mas...</a>&nbsp; &nbsp;
					<span class="num-comentarios">43 comentarios</span> 
				</article>	

				<!--Articulo principal 4-->
				<article class="post">

					<a href="html/PostMusica1.html" class="enlace-post">
						<h2 class="titulo-post">Fiscalía de Colombia difunde análisis toxicológico de Taylor Hawkins, dice que se hallaron 10 tipos de sustancias</h2>
					</a>
					<img src="https://imagenes.20minutos.es/files/image_656_370/uploads/imagenes/2022/03/26/taylor-hawkins.jpeg" class="img-post">
					<p>
						<strong>Por:</strong><span class="datos-publicaciones">Anonimo</span>
						&nbsp; &nbsp; 
						<strong>Fecha: </strong><span class="datos-publicaciones">Martes 19 de Octubre del 2020</span>
					</p>
					<p class="parrafo-post">
						Los seguidores de Foo Fighters comenzaron a llenar el viernes por la noche el recinto del Stereo Picnic, un festival de música que se celebró a las afueras de Bogotá. Se agolpaban alrededor del escenario en el que iba a tocar una de las bandas más emblemáticas de rock...<br>
					</p>

					<a href="html/PostMusica1.html" class="leer-mas">Leer mas...</a>&nbsp; &nbsp;
					<span class="num-comentarios">86 comentarios</span> 
				</article>	

				<!--Articulo principal 5-->
				<div id="paginacion" style="text-align:center">
					<p>Anteriores publicaciones &nbsp; &nbsp; <a href="https://cnnespanol.cnn.com/seccion/mundo/"class="enlace-paginacion">
					Siguientes publicaciones</a></p><br>
					<p><h1>"Motivacion del dia de hoy"</h1></p>
					<!--GIF-->
			
					<p><img class="gif" src="https://cdn.domestika.org/c_limit,dpr_auto,f_auto,q_auto,w_820/v1421714011/content-items/001/187/332/gif-personajillos-original.gif?1421714011" alt=""></p>
					<img></img>div>
						<button onclick="playPause()">Reproducir/Pausar</button> 
						<button onclick="makeBig()">Grande</button>
						<button onclick="makeSmall()">Pequeño</button>
						<button onclick="makeNormal()">Normal</button>
					<br><br>
					<!--VIDEO-->
					<video id="video1" width="420" autoplay muted controls="">
				    	<source src="video/reflejo.mp4" type="video/mp4">
				    	<source src="video/movie.ogg" type="video/ogg">
				    	Su navegador no es compatible con video HTML.
  					</video>
				</div>
					<script> 
					var myVideo = document.getElementById("video1"); 

					function playPause() { 
					  if (myVideo.paused) 
					    myVideo.play(); 
					  else 
					    myVideo.pause(); 
					} 

					function makeBig() { 
					    myVideo.width = 560; 
					} 

					function makeSmall() { 
					    myVideo.width = 320; 
					} 

					function makeNormal() { 
					    myVideo.width = 420; 
					} 
					</script> 
		</section>
					
		<!--Lado derecho-->	
		<section id="sidebar">
			<section id="buscar">
				<h2 class="encabezado-sidebar">Buscar</h2>
				<form>
					<input type="text" name="buscar" placeholder="buscar">
					<button class="boton">ok</button>
				</form> 
			</section>

			<section id="categorias">
				<h2 class="encabezado-sidebar">Categorias</h2>
				<a href="" class="enlace-sidebar">Peliculas</a>
				<a href="html/videojuegos.html" class="enlace-sidebar">Videojuegos</a>
				<a href="html/Musica.html" class="enlace-sidebar">Musica</a>
			</section>

			<section id="sitios-amigos">
				<h2 class="encabezado-sidebar">Sitios-Amigos</h2>
				<a href="https://www.meetme.com/#home" class="enlace-sidebar">MeetMe</a>
				<a href="https://www.skout.com/" class="enlace-sidebar">Skout</a>
				<a href="https://bumble.com/es/" class="enlace-sidebar">Bumble</a>
				<a href="https://ablo.live/#/landing/getstarted" class="enlace-sidebar">Ablo</a>
				<a href="https://www.yubo.live/es/" class="enlace-sidebar">Yubo</a>
			</section>

			<section id="sitios-amigos">
				<h2 class="encabezado-sidebar">Publicidad</h2>
				<a href="https://www.revistadyna.com/Articulos/Ficha.aspx?idMenu=a5c9d895-28e0-4f92-b0c2-c0f86f2a940b&Cod=10180&codigoacceso=d03d7770-1e26-48ff-914b-cb11691baf08" class="enlace-sidebar"class="enlace-sidebar">
					<h4>ANÁLISIS DEL CONTROL CLIMÁTICO EN UN INVERNADERO DE ROTACIÓN DE CULTIVOS</h4>
					<p>El desarrollo de políticas energéticas para reducir el consumo de energía y el impacto ambiental y la importancia del sector agrícola con sus industrias asociadas en regiones, como Extremadura, con la mayor parte de la producción agrícola mediante cultivo tradicional, hace que sea interesante el aprovechamiento de terrenos naturalmente no aptos para el cultivo, así como mejorar la productividad gracias al control climático mediante energías renovables en invernaderos, ayudando a los agricultores a obtener productos competitivos. </p>
				</a>

				<a href="https://www.revistadyna.com/Articulos/Ficha.aspx?idMenu=a5c9d895-28e0-4f92-b0c2-c0f86f2a940b&Cod=10212&codigoacceso=030d460c-212e-431f-a5a4-5c4790ddbd28" class="enlace-sidebar"class="enlace-sidebar">
					<h4>BIOPLÁSTICO ELABORADO DE CÁSCARAS DE NARANJA</h4>
					<p>Este estudio usa los desperdicios de las cáscaras de naranja para crear un biopolímero que puede ser utilizado para distintos propósitos. Para lograr esto, se evaluaron diferentes tecnologías en el proceso de obtención del biopolímero tratando de hacer un proceso lo más amigable con el medio ambiente.</p>
				</a>
				
				<a href="https://www.revistadyna.com/Articulos/Ficha.aspx?idMenu=a5c9d895-28e0-4f92-b0c2-c0f86f2a940b&Cod=9969&codigoacceso=074ad059-03a3-4c42-9cc3-5c47d1083b76" class="enlace-sidebar"class="enlace-sidebar">
					<h4>REALMENTE ¿QUÉ APRENDE EL ALUMNADO DE PRIMER CURSO DE INGENIERÍA?</h4>
					<p>Hace décadas que el foco de la educación ha pasado de la enseñanza al aprendizaje, es decir el foco principal son las necesidades y habilidades del alumnado que aprende, y no está en el/la docente que enseña</p>
				</a>
			</section>

		</section>
	</section>

</body>
</html>
