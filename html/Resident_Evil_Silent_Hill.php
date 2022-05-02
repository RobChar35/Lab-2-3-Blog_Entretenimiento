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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/burbujas.css">
    <link rel="stylesheet" href="../css/smartphone_articulo.css">
    <style type="text/css">
        h3 {
            color: red;
        }
        
        h1 {
            color: gold;
        }
    </style>


</head>

<body>
    <header class="header">
        <div id="logo">
            <marquee direction="right">MyBlog</marquee>

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

                <a href="" class="enlace-post"></h2>
                </a>
                <h1>
                    <center>Resident Evil y Silent Hill</center>
                </h1><br>
                <center><img src="../img/resident-evil4.jpeg" id="img_imp" width="400" height="300"></center>
                <p>
                    <strong>Por: Dan Villalobos</strong><span class="datos-publicaciones"> </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones"> 31 de Marzo del 2022</span>
                </p>
                <p>
                    <p>Como seguramente sabes, Resident Evil y Silent Hill hicieron su debut a mediados de los 90 y desde entonces han conseguido una enorme base de fanáticos. En la actualidad, solamente una de ellas sigue recibiendo nuevas entregas, pero
                        ambas mantienen su gran impacto y gusto por parte de la comunidad. Es debido a esto que Shinji Mikami, creador de Resident Evil, fue invitado por Keiichiro Toyama, responsable de Silent Hill y de Bokeh Game Studio, para reunirse
                        y platicar sobre su tiempo desarrollando los juegos de cada saga.
                    </p>

                    <p>Uno de los momentos más importantes del encuentro fue cuando los japoneses bromearon con haber “copiado” algunos elementos de otros juegos: “Obviamente, no tenía sentido imitar a Resident Evil con Silent Hill; no tendría ningún sentido
                        hacer una copia. Hubo un desafío para tratar de hacer todos los fondos con polígonos, sin embargo, cuando nos preguntaban sobre pequeños detalles, simplemente les decíamos que copiaran a Resident Evil”, confesó Toyama.
                    </p>

                    <h3>Por otro lado, Shinji Mikami habló sobre su frustración con las películas de zombis </h3>

                    <p>“También veía películas de zombis cuando era estudiante, antes de unirme a Capcom. De hecho, confirmé que los zombis no eran lo más aterrador que había. Los zombis de antaño eran estúpidos, también lentos. Cuando vi por primera vez
                        Dawn of the Dead, recuerdo haber pensado en cómo sobreviviría, me enojaría con los personajes que mueren debido a sus estúpidas elecciones. Pensé que en un juego, podrías construir tus propias elecciones”, dijo Mikami.</p>

                    <p>
                        Como puedes observar, la reunion de Toyama y Mikami deja varias anécdotas y confesiones interesantes que cualquier fanático de Resident Evil o Silent Hill van a disfrutar, por lo que te invitamos a ver el video completo.
                    </p>


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