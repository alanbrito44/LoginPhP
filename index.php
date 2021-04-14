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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Pagina Principal</title>
</head>
<body style="background-image: url('img/fondo2.jpg');">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php if($nom == "administrador"):?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Configuraciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Actividades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Reportes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Enlaces</a>
                        </li>
                    <?php endif?>
                    <?php if($nom == "secretaria"):?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Actividades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Enlaces</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Intranet</a>
                        </li>
                    <?php endif?>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-primary mx-4" role="button" href='login.php?cerrar=true'> 
                        Cerrar Sesión</a>
                        <?php
                            echo "<p class='text-end fw-bold'>$nom</p>";
                        ?>
                </form>
            </div>
        </div>
    </nav>
</body>
</html>