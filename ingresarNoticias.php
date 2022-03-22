<?php
require('functions.php');
$conn = getConnection();
$nombre=$_POST['nombre'];
$rss =$_POST['rss'];
$categorias =$_POST['categorias'];
$usuario = $_POST['idCedula'];


$sql ="INSERT INTO `nuevas_noticias`(`nombre_noti`, `url_rss`, `categoria_id`, `id_usuario`) VALUES 
('$nombre','$rss','$categorias','$usuario')";
$query = mysqli_query($conn,$sql);
if($query){

    header('Location:pantallaCrudNoticias.php');
    echo "<h2>Noticia guardada exitosamente!!</h2>";
}else{
    header('Location:pantallaIngresoNoticias.php');
    echo "Hubo un Error";
}