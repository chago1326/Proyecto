
<?php
require('functions.php');
$conn = getConnection();

$nombre=$_POST['nombre'];
$rss =$_POST['rss'];
$categorias =$_POST['categorias'];
// tengo que capturar el usurario
$usuario = "207880338";



$sql ="INSERT INTO `nuevas_noticias`(`nombre_noti`, `url_rss`, `categoria_id`, `id_usuario`) VALUES 
('$nombre','$rss','$categorias','$usuario')";
$query = mysqli_query($conn,$sql);
if($query){

    header('Location:pantallaIngresoNoticias.php');
    echo "Noticia guardada excitosamente!!";
}else{
    header('Location:pantallaIngresoNoticias.php');
    echo "Hubo un Error";
}