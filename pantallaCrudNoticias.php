<?php 
    require("functions.php");
    $con= getConnection();
    $user=['id_cedula'];

    $sql="SELECT id_nue_noticas,nombre_noti,url_rss,categoria_nom,id_usuario FROM `nuevas_noticias`,`usuarios`,`categorias` 
    WHERE nuevas_noticias.id_usuario = usuarios.id_cedula and nuevas_noticias.categoria_id = categorias.id and id_usuario = '$user'";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Crud categorias</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="estiloCrudNoticias.css">

      

    </head>

    
    <body>
        
            <div class=" container mt-5 ">
                        <div class="col-md-8">
                            <table class="table" >
                                <thead  class="table-success table-striped" >
                                    <tr>
                                        <th hidden>Id</th>
                                        <th>Nombres</th>
                                        <th hidden>Rss</th>
                                        <th>Categoria</th>
                                        <th hidden>Usario</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th hidden><?php  echo $row['id_nue_noticas']?></th>
                                                <th><?php  echo $row['nombre_noti']?></th>
                                                <th hidden><?php  echo $row['url_rss']?></th>
                                                <th><?php  echo $row['categoria_nom']?></th>
                                                <th hidden><?php  echo $row['id_usuario']?></th>
                                               
                                        
                                                <th><a href="pantallaActulizarNoticia.php?id=<?php echo $row['id_nue_noticas'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="eliminarNoticia.php?id=<?php echo $row['id_nue_noticas'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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