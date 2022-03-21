<?php
require('functions.php');
$con= getConnection();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ingresando Noticia</title>
	<link rel="stylesheet" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	

</head>
<body>

<form action="ingresarNoticias.php"  method="Post" name="formDatosPersonales">
	<?php $user=['id_cedula'];?>
	<label for="nombre">Nombre de la Noticia</label>
	<input type="text" name="nombre"  id="nombre" placeholder="Escribe el nombre de la Noticia" required/>

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