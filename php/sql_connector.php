<?php
    function conectar() {
        $xc = mysqli_connect("localhost", "root", "", "blog_entretenimiento");
        return $xc;
        die();
    }

    function desconectar($xc) {
        mysqli_close($xc);
    }

    $xc = conectar();
    $sql = "SELECT * FROM ";
    $res = mysql_query($xc, $sql);
    desconectar($xc);

    $filas = mysqli_fetch_array($res);

?>