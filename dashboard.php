<?php
  session_start();

  $user = $_SESSION['user'];
  if (!$user) {
    header('Location: index.php');
  }
  ?>
  
  <title>Menu principal</title>
  <h1> Bienvenido <?php echo $user['nombre']; echo $user['apellido'] ?> </h1>
  <a href="logout.php">Logout</a>

  <nav class="nav">
    <?php  if($user['rol'] === 'Administrador') { ?>
      <li class="nav-item">
        <a class="nav-link active" href="matricula.php">Matricular</a>
      </li>
    <?php } ?>
    <li class="nav-item">
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Materias</a>
    </li>
  </nav>


