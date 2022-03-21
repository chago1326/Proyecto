<?php
  session_start();

  $user = $_SESSION['user'];
  if (!$user) {
    header('Location: index.php');
  }
  ?>
  
  <title>Menu principal</title>
  <h1> Bienvenido <?php echo $user['nombre']; ?> </h1>

  <a href="logout.php">Logout</a>
  
  <nav class="nav">
    <?php  if($user['tipo_rol'] === 'Administrador') { ?>
      <li class="nav-item">
        <a class="nav-link active" href="categoria.php">Mantenimiento de categorias</a>
        
      </li>
    
      
    <?php  } elseif($user['tipo_rol'] === 'Usuario'){?>
       <li class="nav-item">
       <a class="nav-link active" href="pantallaCrudNoticias.php">Tus Noticias</a>
       <a class="nav-link active" href="pantallaIngresoNoticias.php">Tus Noticias</a>
        </li>
        <?php  } ?>
    
  </nav>


