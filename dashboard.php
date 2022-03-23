<?php
require('prueba.php');
  session_start();

  $user = $_SESSION['user'];
  if (!$user) {
    header('Location: index.php');
  }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu principal</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estiloDasboard.css">

</head>

<body>





    <?php  if($user['tipo_rol'] === 'Administrador') { ?>

    <?php header('Location:categoria.php'); ?>



    <?php  } elseif($user['tipo_rol'] === 'Usuario'){?>


    <br>
    <br>

   
        <div class="dropdown">

            <button type="button" class="btn btn-success dropdown-toggle " data-toggle="dropdown">
                <?php echo $user['nombre']; ?>
            </button>
            

            <div class="dropdown-menu">
                <a class="dropdown-item" href="pantallaCrudNoticias.php">Mantenimiento de noticias</a>
                <a class="dropdown-item" href="pantallaIngresoNoticias.php">Ingreso de una nueva noticia</a>
                <a class="dropdown-item" href="dashboard.php">Mis noticias</a>
                <a class="dropdown-item" href="logout.php">Logout</a>

            </div>
        </div>



    <h1> Tu portada de noticias única </h1>

    <nav class="navbar navbar-expand-md navbar-fixed-top navbar-dark bg-dark main-nav ">
        <div class="container">
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Todas</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" href="#">Nacionales</a>
                </li>
                <li class="nav-item mx-auto">
                    <a class="nav-link" href="#">Internacionales</a>
                </li>
            </ul>
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item"><a class="nav-link" href="#">Culturales</a></li>
            </ul>
            <ul class="nav navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Deportes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
        
    <?php 
    $user =$user['id_cedula'];
  
    mostrar($user);
 } ?>


</body>

</html>