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
                    <center>VALORANT</center>
                </h1><br>
                <center><img src="../img/kru-esports-en-mundial-de-valorant-1277687.jpg" id="img_imp" width="400" height="300"></center>
                <p>
                    <strong>Por: Alejandro Sandova</strong><span class="datos-publicaciones"> </span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <strong>Fecha: </strong><span class="datos-publicaciones"> 28 de Marzo del 2022</span>
                </p>
                <p>
                    <p>Al igual que en las finales del pasado Challengers, nuevamente fueron las dos escuadras provenientes de Latinoamérica Sur las que se jugaron el pase directo al evento en Islandia. Esto luego de una serie de enfrentamientos en los que
                        los equipos del norte sacaron a relucir su lado más agresivo, aunque esto no sería suficiente para frenar el avance de sus oponentes.</p>

                    <p>Si hablamos de los finalistas, Leviatán llegó a esta instancia siendo el claro favorito a llevarse el título, luego de vencer con un contundente 2-0 a FUSION y mandar al bracket inferior a E-Xolos LAZER.Pero estos no llegaron solos
                        a la batalla por el campeonato regional, ya que KRÜ Esports volvería con más fuerza para acabar con todo a su paso. Si bien su inicio en el torneo fue un tanto sorpresivo al caer por 2-0 ante los campeones del norte, estos no tardarían
                        en responder con ímpetu al eliminar a ambas escuadras de LAN para ir por la revancha ante los dragones.</p>

                    <p>El enfrentamiento entre estas potencias del competitivo dió inicio en Breeze, mapa elegido por los chicos de Leviatán pero que terminaría cayendo en manos de KRÜ. Aquí tuvimos la ronda más pareja de toda la serie al cerrar con un overtime
                        y un marcador de 13-15, con Leviatán teniendo la ventaja temprana en la primera mitad, mientras que Keznit sacó a relucir un inesperado pick de Jett. Para el segundo duelo, la acción se trasladó al mapa de Haven en el que la escuadra
                        del dragón lograría lo imposible, y le arrebataría el segundo punto a sus rivales en su mapa insignia. De la mano de Tacolilla y su gran movilidad con Jett, así como el poderoso Sova de Adverso, Leviatán tuvo un gran control en
                        cuanto a retakes e ingresos con el cual empataron la serie. A pesar de este buen momentum, la escuadra del Kun Agüero llegaría con fuerza al mapa de Ascent en el que con ayuda de Nagzet y su Jett, el equipo argentino cerró la primera
                        parte con un aplastante 11-1. Sin embargo, la levianeta tomó vuelo nuevamente al concretar un comeback histórico con dos grandes rachas de victorias, colocando el marcador 12-12 y forzando un overtime que terminaría a su favor.
                    </p>

                    <center><img src="../img/sergio-aguero-ceo-kru-esports.jpg" id="img_horizon"></center>

                    <p>
                        Ahora, KRÜ deberá prepararse de cara a lo que será su siguiente evento internacional, en el que equipos como G2 Esports, DRX, The Guard y LOUD buscarán quedarse con el trono y el título del mejor del mundo, ya que ninguno de los tres campeones anteriores
                        estarán de vuelta en el escenario.
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