<?php
    session_start();
    $usuario = "administrador";
    $contraseña = "admin";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        header("Location: index.php");
    }

    if (isset($_POST['usuario']) && isset($_POST['contraseña'])){
        if($_POST['usuario'] == $usuario &&  $_POST['contraseña'] == $contraseña){
            $_SESSION['loggedin'] = true;
            header("Location: index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<body>
    <form action="login.php" method="POST">
        Usuario: <br>
        <input type="text" name="usuario"><br>
        Contraseña: <br>
        <input type="password" name="contraseña"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>