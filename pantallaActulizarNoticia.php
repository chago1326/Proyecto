<?php

    session_start();

    $user = $_SESSION['user'];
    if (!$user) {
    header('Location: index.php');
    }
 require('functions.php');
 $conn=getConnection();
$id_noticias = $_GET['id'];

$sql="SELECT id_nue_noticas,nombre_noti,url_rss,categoria_nom,id_usuario,categoria_id FROM `nuevas_noticias`,`usuarios`,`categorias` 
WHERE id_nue_noticas = $id_noticias and nuevas_noticias.id_usuario = usuarios.id_cedula and nuevas_noticias.categoria_id = categorias.id;";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="estiloCrudNoticia.css">


</head>

<body>
    <div class="container mt-5">
        <form action="actulizarNoticia.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $row['id_nue_noticas']  ?>">
            <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre"
                value="<?php echo $row['nombre_noti']  ?>">
            <input type="text" class="form-control mb-3" name="rssUrl" placeholder="Url"
                value="<?php echo $row['url_rss']  ?>">
           
            <select name="categorias" id="categorias"   >
                

            <?php

              $id_cate =$row['categoria_id'];
               $sql2="SELECT * FROM `categorias`";
                 $quer=mysqli_query($conn,$sql2);
                    
                while ($valores = mysqli_fetch_array($quer)) {
                    if($id_cate == $valores['id'] ){

                        echo "<option selected value=\"$valores[id]\">$valores[categoria_nom]</option>";


                    }else{
                        echo "<option value=\"$valores[id]\">$valores[categoria_nom]</option>";
                    }
                    
                    }
                ?>
            </select>
            <br>
            <br>
            

            <input type="submit" class="btn btn-primary btn-block" value="Guardar Cambios">
        </form>

    </div>
</body>

</html>