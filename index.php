<?php
    session_start();
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
        header("Location: login.php");
    }
    $nom = $_SESSION['tipoUsuario'];
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
    <h2>Se ha ingresado correctamente</h2>
    <?php
        echo $nom;
    ?>
    <a href='login.php?cerrar=true'> Cerrar Sesión</a>
</body>
</html>