<!DOCTYPE html>
<?php
	include("../sql_connector.php");
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
	<link rel="stylesheet" href="../css/smartphone.css">
</head>
<body >
	<!--cabeza-->
	<header class="header">
	    	<div id="logo">
	    		<marquee direction="right">Todo Plus</marquee>
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
		<?php 
			$sql_publicaciones="SELECT *FROM publicaciones WHERE idpublicaciones > 4 AND idpublicaciones <= 10";
					$resultado=mysqli_query($conn,$sql_publicaciones);
                	while($publicaciones=mysqli_fetch_assoc($resultado)){ ?>
						<article class="post">
						
						
							<a href="<?php echo $publicaciones['LinkTitulo']?>" class="enlace-post"></h2>
								<h2 class="titulo-post"><?php echo $publicaciones['Titulo']?></h2>
							</a>
							<img src="<?php echo $publicaciones['LinkImagen']?>" class="img-post">
							<p>
								<strong>Por: </strong><span class="datos-publicaciones"><?php echo $publicaciones['Autor']?></span>
								&nbsp; &nbsp; 
								<strong>Fecha: </strong><span class="datos-publicaciones"><?php echo $publicaciones['Fecha']?></span>
							</p>
							<p class="parrafo-post">
							<?php echo $publicaciones['Parrafo']?>
							</p>

							<a href="<?php echo $publicaciones['LinkLeerMas']?>" class="leer-mas">Leer mas...</a>&nbsp; &nbsp;
							<span class="num-comentarios"><?php echo $publicaciones['Numero de comentarios']." comentarios"?></span> 
						</article>
                <?php } ?>

				<div id="paginacion" style="text-align:center">
					<p>Anteriores publicaciones &nbsp; &nbsp; <a href="../index.html"class="enlace-paginacion">
					Siguientes publicaciones</a></p><br>
					<div id="paginacion" style="text-align:center">
					<p>Anteriores publicaciones &nbsp; &nbsp; <a href="https://cnnespanol.cnn.com/seccion/mundo/"class="enlace-paginacion">
					Siguientes publicaciones</a></p><br>
					<?php 
						
						$resultado1=mysqli_query($conn,$sql_motivacion1);
						$texto=mysqli_fetch_assoc($resultado1);
					?>
					<p><h1><?php echo $texto['texto'] ?></h1></p>
					<!--GIF-->
					<?php
						$resultado2=mysqli_query($conn,$sql_motivacion2);
						$gif=mysqli_fetch_assoc($resultado2);
					?>
					<p><img class="gif" src="<?php echo $gif['Links']?>" alt=""></p>
					<img></img>div>
					<?php
						$resultado3=mysqli_query($conn,$sql_motivacion3);
						
						while($opciones=mysqli_fetch_assoc($resultado3)){ ?>
							<button onclick="<?php echo $opciones['Funciones'] ?>"><?php echo $opciones['Opciones']?></button>
						<?php } ?>
					<br><br>
					<!--VIDEO-->
					<?php
						$resultado4=mysqli_query($conn,$sql_motivacion4);
						$video=mysqli_fetch_assoc($resultado4);
					?>

				    	<?php echo $video['Link']?>
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
					<input type="text" name="busqueda"  placeholder="¿Qué deseas buscar?">
					<button class="boton" name="enviar" value="Buscar">ok</button>
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
				<!--<a href="https://www.revistadyna.com/Articulos/Ficha.aspx?idMenu=a5c9d895-28e0-4f92-b0c2-c0f86f2a940b&Cod=10180&codigoacceso=d03d7770-1e26-48ff-914b-cb11691baf08" class="enlace-sidebar"class="enlace-sidebar">
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
				</a>-->
			</section>

		</section>
	</section>

</body>
</html>
