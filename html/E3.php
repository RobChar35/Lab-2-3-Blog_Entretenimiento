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
            color: green;
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
                    <center>E3</center>
                </h1><br>
                <center><img src="../img/e3-cara.jpeg" class="img_tunche"></center>
                <p>
                    <strong>Por:</strong><span class="datos-publicaciones"> Pedro Pérez</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones"> 31 de Marzo del 2022</span>
                </p>
                <p>
                    <p>E3, el más importante evento de videojuegos, ha tenido problemas durante los últimos años que la pandemia por coronavirus (COVID-19) terminó acrecentando. Lamentablemente, todo indica que la edición de 2022 fue cancelada, pero ¿eso
                        significa el fin del evento? ¿Quiere decir que E3 2023 no existirá? Esto es lo que sabemos. Recientemente IGN publicó un artículo en el que afirmó que sus fuentes le confirmaron que E3 2022 quedó oficialmente cancelado. Esto después
                        de que recibió el correo electrónico en el que la Entertainment Software Association (ESA) confirma que este año no habrá E3 en formato físico o digital.
                    </p><br>

                    <p>Fuentes de IGN también aseguran que esta cancelación no representa el final de E3. Si bien la edición de 2022 no existirá, la realidad es que la ESA no se rinde y quiere que el E3 regrese en 2023. Eso sí, no adelantó ningún detalle
                        sobre el esperado evento de videojuegos. De hecho, se dice que una de las razones por las que E3 2022 fue cancelado fue porque la ESA quiere reagruparse para que el regreso de E3 el próximo año sea un duro golpe de autoridad.
                        <br>
                        <center><img src="../img/e3-2020-cancelado.webp" id="img_tunche2"></center>

                        <p>
                            Poco después de que IGN publicó su nota, la ESA emitió un comunicado en el que confirmó que su intención es que E3 regrese en 2023. “E3 regresará en 2023 con un evento revitalizado que celebra las nuevas y emocionantes innovaciones de los videojuegos
                            y la industria”, mencionó la ESA.

                        </p>


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