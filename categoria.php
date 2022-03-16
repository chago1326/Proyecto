<?php 
    require("functions.php");
    $con= getConnection();

    $sql="SELECT * FROM categorias";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crud categorias</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo_categoria">

      

    </head>

    
    <body>
        
            <div class=" container mt-5 ">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese la informacion de las categorias</h1>
                                <form action="ingresar_categoria.php" method="POST">
                                    <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres">
                                   
                                    
                                    <input type="submit" class="btn btn-primary" >
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead  class="table-success table-striped" >
                                    <tr>
                                        <th hidden>Id</th>
                                        <th>Nombres</th>
                                        
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th hidden><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['categoria_nom']?></th>
                                        
                                                <th><a href="vista_actualizar_categoria.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminar_categoria.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>