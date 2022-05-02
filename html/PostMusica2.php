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
					<h1><center>Fiscalía de Colombia difunde análisis toxicológico de Taylor Hawkins, dice que se hallaron 10 tipos de sustancias</center></h1><br>
					<center>
						<?php
							#Link
							$link_postMusica2 = "SELECT idArticle_Links, Link FROM Article_Links WHERE idArticle_Links = 3";

							$res_link = mysqli_query($conn, $link_postMusica2);
							$link_show = mysqli_fetch_assoc($res_link);

							echo '<img src="'.$link_show["Link"].'" class="img-post2">';
						?>
					</center>
					<p>
						<strong>Por:</strong><span class="datos-publicaciones"> Omar Obando</span>
						&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<strong>Fecha: </strong><span class="datos-publicaciones"> 24 de marzo del 2022</span>
					</p>
					<?php
						$postMusic2 = "SELECT text FROM postMusica_text WHERE idpostMusica_text > 3";

						$res_pM2 = mysqli_query($conn, $postMusic2);
						while($filas_pM2 = mysqli_fetch_assoc($res_pM2)){
							echo '<p>'.$filas_pM2["text"].'</p><br>';
						}
					?>
						

<!--Hola, comienza el lado de paginacion-->

					<div id="paginacion">
						<p><a href="Musica.html"class="enlace-paginacion">
						<strong><center><h2>Regresar a la sección música</h2></center></strong></a></p>
					</div>
				</article>
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