<?php
    function conexion(){
        $server="localhost";
        $user="root";
        $pass="";
        $bd="motivacion";
        $conectar=mysqli_connect($server,$user,$pass,$bd) or die("Error en la conexion ");
        return $conectar;
    }
    conexion();
?>