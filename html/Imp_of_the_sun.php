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
					<h1><center>Imp of the sun</center></h1><br>
					<center><img src="../img/imp.jpg" id="img_imp" width="400" height="300" ></center>
					<p>
						<strong>Por: Sunwolf Entertainment</strong><span class="datos-publicaciones"> </span>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<strong>Fecha: </strong><span class="datos-publicaciones"> 03 de Noviembre del 2021</span>
					</p>
					<p>
						<p>Imp of the Sun es un juego de plataformas de acción en 2D no lineal que combina una exploración y un combate trepidantes en un impresionante mundo inspirado en Perú, desde las brillantes cumbres de las montañas andinas hasta las densas selvas amazónicas, y mucho más.</p>

						<p>Encarnarás a Nin, un diablillo creado a partir de la última chispa del Sol que tendrá que embarcarse en una aventura para derrotar a los cuatro guardianes y restaurar el poder del Sol para poner fin al Eclipse eterno antes de que el mundo se sumerja en la oscuridad.</p>

						<center>
							<video id="imp_video" width="420"  controls="controls">
				    	<source src="../video/imp_video.mp4" type="video/mp4">
				    	<source src="../video/imp_video.ogg" type="video/ogg">
				    	Su navegador no es compatible con video HTML.
						</center>

						<h3>Acaba con el eclipse eterno</h3>
							
						<p>Hace siglos, los cuatro guardianes robaron el poder del Sol y lo ocultaron en lo más recóndito del Imperio. Sin él, cualquier rastro de vida está abocado a la desaparición. Con la última chispa de su poder, el Sol creó a Nin para que emprendiera su aventura para devolver la luz y restaurar el equilibrio del Imperio.</p>
							
						<h3>Un mundo extraordinario inspirado en la cultura peruana</h3>

						<p>
							Descubre los cuatro rincones del Imperio, desde las brillantes cumbres de las montañas andinas y las densas selvas amazónicas hasta los secos y abrasadores desiertos y las oscuras profundidades del inframundo. Cada tierra y cada criatura están dibujadas a mano con mucho amor y con el máximo detalle; un homenaje a las civilizaciones que una vez poblaron y gobernaron Perú.
						</p>

						<center>
							<video id="imp_video2" width="420"  controls="controls">
				    	<source src="../video/lanzamiento.mp4" type="video/mp4">
				    	<source src="../video/lanzamiento.ogg" type="video/ogg">
				    	Su navegador no es compatible con video HTML.
						</center>


						<center><strong><tt><marquee class="enlace-paginacion" bgcolor="gold"><a href="videojuegos.html"><h2>Regresar al inicio</h2></marquee></tt></strong></center><br></a>



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
