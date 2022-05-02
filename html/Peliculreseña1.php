<!DOCTYPE html>
<?php
	include("../sql_connector.php");

	#Menu
	$sql_menu = "SELECT * FROM menu_htmldir";

	#Jujutsu Kaisen 0
	$jujutsu = "SELECT * FROM jujutsuK_Text";

	#publicidad
	$sql_publicidad="SELECT * FROM publicidad";
	$sql_sitios_amigos="SELECT * FROM sitios_amigos";
?>
<html>
<style>
table, th, td {
  border:1px solid black;

}
</style>
<head>
	<title>Mi Blog</title>
	<meta charset="utf-8">
		<!-- CSS only -->

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" href="../css/burbujas.css">
	<link rel="stylesheet" href="../css/smartphone_articulo.css">
</head>
<body>
	<header class="header">
	    	<div id="logo">
	    		<marquee direction="right">Todo Plus</marquee>
	    	</div>

	    	<div id="menu">
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
					<h2 class="titulo-post">Jujutsu Kaisen 0 Reseña</h2>

					<?php
						#Link
						$link_article1 = "SELECT idArticle_Links, Link FROM Article_Links WHERE idArticle_Links = 1";

						$res_link = mysqli_query($conn, $link_article1);
						$link_show = mysqli_fetch_assoc($res_link);

						echo '<img src="'.$link_show["Link"].'" class="img-post">';
					?>	

					<p>
						<strong>Por:</strong><span class="datos-publicaciones">Erika Rodriguez</span>
						&nbsp; &nbsp; 
						<strong>Fecha: </strong><span class="datos-publicaciones">21 de marzo de 2022</span>
					</p>
					<p class="parrafo-post">					
						<p>El Mejor Anime del Año 2021 está de regreso con su película Jujutsu Kaisen 0 y nos presenta una nueva perspectiva de los poderosos personajes secundarios.</p><br>
						<strong>Reseña película Jujutsu Kaisen 0</strong><br>

						<?php	
							$res_jujutsu = mysqli_query($conn, $jujutsu);
							while($filas_jujutsu = mysqli_fetch_assoc($res_jujutsu)){
								echo '<p>'.$filas_jujutsu["text"].'</p><br>';
							}
						?>
					</p>
					<strong>Trailer Jujutsu kaisen 0</strong><br>
					<center>
						<?php 
							$link_article2 = "SELECT idArticle_Links, Link FROM Article_Links WHERE idArticle_Links = 2";

							$res_link2 = mysqli_query($conn, $link_article2);
							$link_show2 = mysqli_fetch_assoc($res_link2);

							echo '<iframe width="420" height="345" src="'.$link_show2["Link"].'"></iframe>';
						?>
				    </center>

				</article>	 	
				<div id="paginacion" style="text-align:center">
					<p><a href="../index.php"class="enlace-paginacion">
					<strong><h2>Regresar Atras</h2></strong></a></p><br>
					</script> 
		</section>
					
	<!--Lado derecho-->	
		<section id="sidebar">
			<section id="buscar">
				<h2 class="encabezado-sidebar">Buscar</h2>
				<form>
					<input type="text" name="busqueda" placeholder="¿Qué deseas buscar?">
					<button class="boton" name="enviar" value="Buscar">ok</button>
				</form>
				<?php
				
				$res_bus = mysqli_query($conn, $sql_categoria);

				$res_bus1 = mysqli_query($conn, $sql_categoria1);

				while(($filas_categoria = mysqli_fetch_assoc($res_bus)) && ($filas_redireccion = mysqli_fetch_assoc($res_bus1)) ){

					echo '<a href='.'"'.$filas_redireccion['enlaces'].'"'.'class="enlace-sidebar">'.$filas_categoria['contenido'].'</a>';

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