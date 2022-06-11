<?php
    require 'sql_connector.php';
    
    if(!empty($_SESSION["idusuarios_pagina"])){
      header("Location: index.php");
    }

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmp = $_POST['confirmp'];
  
        $duplicate = mysqli_query($conn, "SELECT * FROM usuarios_pagina WHERE username = '$username' OR email = '$email'");
        if(mysqli_num_rows($duplicate) > 0){
            echo
            "<script> alert('Esta cuenta ya existe'); </script>";
        }

        if($password == $confirmp){
            $sql = "INSERT INTO usuarios_pagina (nombre_usuario, email_usuario, password_usuario) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>"."alert('Usuario registrado.')"."</script>";
            }else{
                echo "<script>"."alert('Error.')"."</script>";
            }
        }else{
            echo "<script>"."alert('El password no coincide.')"."</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

    <?php if(!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <form action="" method="post" class="register-form">
        <h1>Registar usuario</h1>
        <div class="register-form-username">
            <label for="username">Nombre de usuario:</label>
            <input type="text" placeholder="Ingrese su nombre de usuario" name="username" value="<?php echo $_POST['username']; ?>" required>
        </div>
        <div class="register-form-email">
            <label for="email">Email:</label>
            <input type="email" placeholder="Ingrese su email" name="email" value="<?php echo $_POST['email']; ?>">
        </div>
        <div class="register-form-password">
            <label for="password">Password:</label>
            <input type="password" placeholder="Ingrese su password" name="password" value="<?php echo $_POST['password']; ?>" required>
        </div>
            <label for="confirmp">Password:</label>
            <input type="password" placeholder="Ingrese su password" name="confirmp" value="<?php echo $_POST['confirmp']; ?>" required>
        </div>
        <input type="submit" name="submit" value="Registrarse">
    </form>
    <p>Ya tienes una cuenta? <a href="./login.php">Inicia sesion</a></p>
</body>
</html>