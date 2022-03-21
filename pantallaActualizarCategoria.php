<?php
 require('functions.php');
 $conn=getConnection();
$id_categorias = $_GET['id'];

 $sql="SELECT * FROM categorias WHERE id='$id_categorias'";
 $query=mysqli_query($conn,$sql);
 
 $row=mysqli_fetch_array($query);
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Actualizar</title>
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
         <link rel="stylesheet" href="estiloCategoria.css">
             
     </head>
     <body>
                 <div class="container mt-5">
                     <form action="actualizarCategoria.php" method="POST">
                     
                                 <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
                                 <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['categoria_nom']  ?>">
                                
                                 
                             <input type="submit" class="btn btn-primary btn-block" value="Guardar Cambios">
                     </form>
                     
                 </div>
     </body>
 </html>