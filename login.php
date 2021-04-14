<?php
    session_start();
    $usuario = "administrador";
    $contraseña = "admin";
    $usuario2 = "secretaria";
    $contraseña2 = "secre";

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        header("Location: index.php");
    }

    if (isset($_POST['usuario']) && isset($_POST['contraseña'])){
        if($_POST['usuario'] == $usuario &&  $_POST['contraseña'] == $contraseña){
            $_SESSION['loggedin'] = true;
            $_SESSION['tipoUsuario'] = $_POST['usuario'];
            header("Location: index.php");
        }else if($_POST['usuario'] == $usuario2 &&  $_POST['contraseña'] == $contraseña2){
            $_SESSION['loggedin'] = true;
            $_SESSION['tipoUsuario'] = $_POST['usuario'];
            header("Location: index.php");
        }else{
            echo '<div class="alert alert-danger text-center">Usuario o contrasena mala </div>';
        }
    }

    if(isset($_REQUEST["cerrar"])){
        session_destroy();
        header("Location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Pagina Principal</title>
</head>
<body style="background-image: url('img/fondo.jpg');">
    <div class="container">
        <h1>Login de usuario</h1>

        <form id="formulario" action="login.php" method="POST">
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario:</label>
            <input
                id="usuario"
                type="text"
                class="form-control"
                placeholder="Ingrese su usuario"
                name="usuario"
            />
        </div>
        <div class="mb-3">
            <label for="contraseña" class="form-label">Contraseña:</label>
            <input
                id="contraseña"
                type="password"
                class="form-control"
                placeholder="Ingresa tu contraseña"
                name="contraseña"
            />
        </div>
        <input type="submit" value="Login" class="btn btn-primary w-100">
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>