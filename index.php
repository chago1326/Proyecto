<?php
  session_start();
  if ($_SESSION && $_SESSION['user']){
  //Tengo que quitar el dashboart
    header('Location: dashboard.php');
  }

  $message = "";
  if(!empty($_REQUEST['status'])) {
    switch($_REQUEST['status']) {
      case 'login':
        
        $message = 'Usuario no existe ';
      break;
      case 'error':
        $message = 'Hubo un problema al insertar el usuario';
      break;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Inicia sesión</title>
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href= "estilo.css">



  <title>Inicia sesión</title>
</head>
<body>

<div class="container" id="login">
    <div class="msg">
      <?php echo $message; ?>
    </div>
    <h1>Inicia sesión</h1>
    <form action="login.php" method="POST" class="form-inline" role="form">
      <div class="form-group">
        <label class="sr-only" for="">Username</label>
        <input type="text" class="form-control" id="" name="username" placeholder="Su usuario">
      </div>
      <div class="form-group">
        <label class="sr-only" for="">Password</label>
        <input type="password" class="form-control" id="" name="password" placeholder="Su contraseña">
      </div>

      <button type="submit" id="liveAlertBtn" class="btn btn-primary">Login</button>
      <a href="registro.php"><p>¿No tengo cuenta?</p></a>
    </form>
</div>

</body>
</html>