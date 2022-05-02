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
		color: gold;
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
					<h1><center>Horizon Forbidden West</center></h1><br>
					<center><img src="../img/horizon.jpg" id="img_imp" width="400" height="300" ></center>
					<p>
						<strong>Por: Frankie MuBert</strong><span class="datos-publicaciones"> </span>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<strong>Fecha: </strong><span class="datos-publicaciones"> 25 de Febrero del 2022</span>
					</p>
					<p>
						<p>Domar poderosas bestias mecanizadas. La sensación de descubrir y zambullirse en imponentes paisajes naturales y ruinas anteriores al mismísimo apocalipsis. El desafío constante de adaptarse a toda clase de peligros y combatir poderosas amenazas. Horizon Forbidden West es todo lo anterior, y en el proceso se postula como el primer gran vendeconsolas de PS5 y una de las últimas grandes joyas de PlayStation Studios para PS4. Una doble responsabilidad.</p>

						<p>A través de Forbidden West, Guerrilla Games hace regresar a su singular visión del siglo XXXI. Un futuro poco esperanzador para la humanidad y que conocimos a través del imprescindible Horizon Zero Dawn. Un mundo post-apocalíptico en el que las máquinas dominan la Tierra y que se manifiesta en pantalla a través de un fascinante mundo abierto colmado de acción con paisajes que invitan constantemente a ser explorados, conquistados o, simplemente, perderse en ellos.</p>

						<center>
							<video id="horizon_video" width="420"  controls="controls">
				    	<source src="../video/horizon.mp4" type="video/mp4">
				    	<source src="../video/horizon.ogg" type="video/ogg">
				    	Su navegador no es compatible con video HTML.
						</center>

						
							
						<p>El equipo de Guerrilla Games no se ha limitado a crear un nuevo y más ambicioso entorno de juego y llenarlo de aventuras: Horizon Forbidden West recibirá nuevas capas de profundidad e interacción a través de las nuevas habilidades de Aloy, la intrépida cazadora de la Tribu Nora que repite protagonismo en esta secuela tras consagrar su estatus de icono de PlayStation en Horizon Zero Dawn.</p>

						<center><img src="../img/ima_horizon3.jpeg" id="img_horizon" ></center>
							
						<h3>Fecha de lanzamiento de Horizon Forbidden West</h3>

						<p>
							La aventura de Horizon Forbidden West comenzó el 18 de febrero de 2022 en PS4 y PS5 de manera simultánea y a través de diferentes ediciones. Según la propia PlayStation Studios, de momento no está previsto que Forbidden West se publique para otras plataformas, aunque -siendo justos- no es rotundamente descartable que llegue a verse en PC en años venideros como ocurrió con Horizon Zero Dawn. 
						</p>

						<center>
							<video id="horizon_video2" width="420"  controls="controls">
				    	<source src="../video/horizon2.mp4" type="video/mp4">
				    	<source src="../video/horizon2.ogg" type="video/ogg">
				    	Su navegador no es compatible con video HTML.
						</center>




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
