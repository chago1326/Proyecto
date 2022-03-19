<?php
require('functions.php');
$conn = getConnection();

$id_noti=$_GET['id'];
 
$sql = "DELETE FROM `nuevas_noticias` WHERE id_nue_noticas = $id_noti";

$query = mysqli_query($conn,$sql);

if($query){
    header('Location: pantallaCrudNoticias.php');
}else{
    header('Location: pantallaCrudNoticias.php');

}