<?php
require('functions.php');
$con= getConnection();

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
	<title>Ingresando Noticia</title>
	<link rel="stylesheet" href="estiloCrudNoticia.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	

</head>
<body>
<div class="dropdown">
        <button type="button" class="btn btn-success dropdown-toggle " data-toggle="dropdown">
            <?php echo $user['nombre']; ?>
        </button>

        <div class="dropdown-menu " >
            <a class="dropdown-item" href="pantallaCrudNoticias">Mantenimiento de noticias</a>
            <a class="dropdown-item" href="#">Ingreso de una nueva noticia</a>
            <a class="dropdown-item" href="dashboard.php">Mis noticias</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
           
        </div>
    </div>

<form action="ingresarNoticias.php"  method="Post" name="formDatosPersonales">
	
	<label for="nombre">Nombre de la Noticia</label>
	<input type="text" name="nombre"  id="nombre" placeholder="Escribe el nombre de la Noticia" required/>
	<input hidden type="text" class="form-control mb-3" name="idCedula" 
                value=" <?php echo $user['id_cedula']; ?>">
	<label for="rss">RSS URL</label>
	<input type="text" name="rss" id="rss" placeholder="Indruzca el RSS URL" required/>

	<label for="categorias">Categoria</label>
	<select name="categorias" id="categorias" >
		
		<?php
	     $sql="SELECT * FROM `categorias`";
		 $query=mysqli_query($con,$sql);
		 
		while ($valores = mysqli_fetch_array($query)) {
          echo "<option value=\"$valores[id]\">$valores[categoria_nom]</option>";
		}
	  ?>
	</select>
	
	
	<input type="submit" name="enviar" value="Guardar Datos"/>


</form>




</body>
</html>