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
<body>

    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <form action="login.php" method="POST">
        Usuario: <br>
        <input type="text" name="usuario"><br>
        Contraseña: <br>
        <input type="password" name="contraseña"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>