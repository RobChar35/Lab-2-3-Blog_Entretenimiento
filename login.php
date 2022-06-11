<?php 
    require 'sql_connector.php';
    if(!empty($_SESSION["idusuarios_pagina"])){
        header("Location: index.php");
    }

    if (isset($_POST["submit"])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result = mysqli_query($conn, "SELECT * FROM usuarios_pagina WHERE nombre_usuario = '$email' OR email_usuario = '$email'");
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) > 0) {
            if($password == $row["password_usuario"]){
                $_SESSION["login"] = true;
                $_SESSION["idusuarios_pagina"] = $row["idusuarios_pagina"];
                header("Location: index.php");
            }else{
                echo "<script> alert('Password incorrecto.'); </script>";
            }
        }else{
            echo "<script> alert('Usuario no registrado.'); </script>";
        }
    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post" class="login-form">
        <h1>Iniciar Sesion</h1>
        <div class="login-form-email">
            <label for="email">Email:</label>
            <input type="text" placeholder="Ingrese su email" name="email">
        </div>
        <div class="login-form-password">
            <label for="user">Password:</label>
            <input type="password" placeholder="Ingrese su password" name="password">
        </div>
        <input type="submit" name="submit" value="Ingresar">
    </form>
    <p>No tienes una cuenta? <a href="./register.php">Registrate</a></p>
</body>
</html>