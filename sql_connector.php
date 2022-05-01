<?php
    #$xc = mysqli_connect("localhost", "root", "databas3$forEverybody", "blog_entretenimiento");
    $serverName = "localhost";
    $userName = "root";
    $password = 'databas3$forEverybody';
    $dbName = "blog_entretenimiento";

    /*
    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName;",$userName,$password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection success";
    } catch (PDOException $e) {
        echo "Error in connection".$e->getMessage();
    }
    */

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    mysqli_set_charset($conn, "utf8");
    
    
?>