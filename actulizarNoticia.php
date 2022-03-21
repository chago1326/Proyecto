<?php

require('functions.php');
$conn = getConnection();

$id = $_POST['id'];

$nombre =$_POST['nombre'];
$url_rss=$_POST['rssUrl'];
$categoria=$_POST['categorias'];

$sql ="UPDATE `nuevas_noticias` SET `nombre_noti`='$nombre',`url_rss`='$url_rss',
`categoria_id`='$categoria' WHERE id_nue_noticas =  $id";
$query=mysqli_query($conn,$sql);


if($query){
    header('Location: pantallaCrudNoticias.php');
    

}else{
    header('Location: pantallaCrudNoticias.php');
  
    
}