<!DOCTYPE html>
<?php
	include("sql_connector.php");
	#Menu
	$sql_menu = "SELECT * FROM menu_htmldir";

	#categorias
	$sql_categoria = "SELECT * FROM categorias";
	$sql_categoria1 = "SELECT * FROM redireccion";

	#motivacion
	
	$sql_motivacion1= "SELECT *FROM texto WHERE idTexto=1";
	$sql_motivacion2= "SELECT *FROM links WHERE idLinks=1";
	$sql_motivacion3= "SELECT *FROM opciones";
	$sql_motivacion4= "SELECT *FROM links WHERE idLinks=2";

	#publicidad
	$sql_publicidad="SELECT * FROM publicidad";
	$sql_sitios_amigos="SELECT * FROM sitios_amigos";
	
?>
<html>
<head>
	<title>Mi Blog</title>
	<meta charset="utf-8">
		<!-- CSS only -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="../css/burbujas.css">
	<link rel="stylesheet" href="../css/smartphone_articulo.css">
	<style type="text/css">
		h3{
		color: red;
		}
		h1{
		color: green;
		}
	</style>
		

</head>
<body>
	<header class="header">
	    	<div id="logo">
	    		<marquee direction="right">MyBlog</marquee>

	    	</div>

	    	<div id="menu" >
	    		<ul>
					<?php
						$resultado = mysqli_query($conn, $sql_menu);
						while($filas_menu = mysqli_fetch_assoc($resultado)){
							echo "<li><a href=".$filas_menu["menu_hdLink"]." class=".$filas_menu["menu_hdClass"].">".$filas_menu["menu_hdTabs"]."</a></li>";
						}
					?>
	    		</ul>
	    	</div> 
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

					<a href="" class="enlace-post"></h2>
					</a>
					<h1><center>TUNCHE</center></h1><br>
					<center><img src="../img/edj.jpg" class="img_tunche"></center>
					<p>
						<strong>Por:</strong><span class="datos-publicaciones"> Sofía Pichihua</span>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<strong>Fecha: </strong><span class="datos-publicaciones"> 03 de Noviembre del 2021</span>
					</p>
					<p>
						<p>El videojuego peruano Tunche fue uno de los más esperados en los últimos meses tras ser anunciado a nivel global durante la presentación “Indie World Showcase” de Nintendo. Luego de cinco años, y gracias también al co-financiamiento obtenido por las donaciones de los propios fans, ya está disponible para PC, así como consolas Nintendo Switch y Xbox One. Próximamente tendrá una versión para PlayStation 4.</p><br>

						<center>
							<video id="tunche_video" width="420"  controls="controls">
				    	<source src="../video/tunche.mp4" type="video/mp4">
				    	<source src="../video/tunche.ogg" type="video/ogg">
				    	Su navegador no es compatible con video HTML.
						</center>
	
						<p>El juego 2D, inspirado en las leyendas de la Amazonía peruana, mezcla géneros que combinan muy bien con la historia. No solo reconocerás populares nombres de nuestra cultura, también podrás disfrutar de elementos de los géneros beat em up (cuerpo a cuerpo) y el modo roguelike, en la que el jugador deberá iniciar su aventura nuevamente al morir en alguna fase.<br>
						<center><img src="../img/ima_tunche.jpg" id="img_tunche2" ></center>	

						<p>
							Los jugadores podrán explorar las arenas de combate que reflejan la diversidad y belleza de los paisajes de nuestra selva amazónica en búsqueda del Tunche, ser mítico de leyendas locales. Para ello pueden elegir entre cinco aliados que deberán enfrentarse a poderosos personajes del folclore amazónico.
						</p>

						<p>Además, como se puede jugar de manera individual o cooperativa local con hasta cuatro jugadores, la aventura es cada vez más retadora. El juego se adapta. Mientras más jugadores hay, habrán más enemigos o tendrán más vida. Aqui te dejamos la reacción de uno de sus creadores</p>

						<center>
							<video id="tunche_reaccion" width="420"  controls="controls">
				    	<source src="../video/reaccion.mp4" type="video/mp4">
				    	<source src="../video/reaccion.ogg" type="video/ogg">
				    	Su navegador no es compatible con video HTML.
						</center>

						<p>Tunche está disponible como juego digital en Epic Game Store, Steam para PC, y en las consolas Xbox One y Nintendo Switch.  La futura versión para PlayStation 4 también podrá ser disfrutada en PS5.</p><br>




						<center><strong><tt><marquee class="enlace-paginacion" bgcolor="gold"><a href="../index.html"><h2>Regresar al inicio</h2></marquee></tt></strong></center><br></a>



					</p>

<!--Hola, comienza el lado de paginacion-->


		</section>

		
		<section id="sidebar">
			<section id="buscar">
				<h2 class="encabezado-sidebar">Buscar</h2>
				<form>
					<input type="text" name="busqueda"  placeholder="¿Qué deseas buscar?">
					<button class="boton" name="enviar" value="Buscar">Ok</button>
				</form>
				<?php
				
				if (isset($_GET['enviar'])){
				   $busqueda = $_GET['busqueda'];
				   
				   $sql_buscador = "SELECT * FROM busqueda_redireccion WHERE enlaces LIKE '%$busqueda%'";
				   $res_bus2 =mysqli_query($conn, $sql_buscador);

				   if ($filas_busqueda_re = mysqli_fetch_assoc($res_bus2)){
						echo '<a href='.'"'.$filas_busqueda_re['enlaces'].'" class="enlace-sidebar">Click aqui</a>';
				   }
			   } 
			   
			   ?> 
			</section>

			<section id="categorias">
				<h2 class="encabezado-sidebar">Categorias</h2>

				<?php
				
				$res_bus = mysqli_query($conn, $sql_categoria);

				$res_bus1 = mysqli_query($conn, $sql_categoria1);

				while(($filas_categoria = mysqli_fetch_assoc($res_bus)) && ($filas_redireccion = mysqli_fetch_assoc($res_bus1)) ){

					echo '<a href='.'"'.$filas_redireccion['enlaces'].'"'.'class="enlace-sidebar">'.$filas_categoria['contenido'].'</a>';

				}
				
				?>
			</section>

			<section id="sitios-amigos">
				<h2 class="encabezado-sidebar">Sitios Amigos</h2>
				<?php
					$result = mysqli_query($conn, $sql_sitios_amigos);
					while($filas_sitios_amigos= mysqli_fetch_assoc($result)){
						echo "<a href=".$filas_sitios_amigos["link"]." class=".$filas_sitios_amigos["class_sitios"].">".$filas_sitios_amigos["name"]."</a>";
					}
						
					?>
				<!--<a href="https://www.meetme.com/#home" class="enlace-sidebar">MeetMe</a>
				<a href="https://www.skout.com/" class="enlace-sidebar">Skout</a>
				<a href="https://bumble.com/es/" class="enlace-sidebar">Bumble</a>
				<a href="https://ablo.live/#/landing/getstarted" class="enlace-sidebar">Ablo</a>
				<a href="https://www.yubo.live/es/" class="enlace-sidebar">Yubo</a>-->
			</section>

			<section id="sitios-amigos">
				<h2 class="encabezado-sidebar">Publicidad</h2>
				<?php
					$result = mysqli_query($conn, $sql_publicidad);
					while($filas_publicidad = mysqli_fetch_assoc($result)){
						echo "<a href=".$filas_publicidad["link"]." class=".$filas_publicidad["publicidad_class"].">".
						"<h4>".$filas_publicidad["titulo"]."</h4> <p>".$filas_publicidad["subitulo"]."</p></a>";
					}
						
					?>
			</section>

		</section>
	</section>


</body>
</html>
