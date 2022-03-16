<?php
require('functions.php');
$conn = getConnection();
$id_categoria=$_GET['id'];

$sql = "DELETE FROM `categorias` WHERE id = '$id_categoria'";
$query =mysqli_query($conn,$sql);

if($query){
    header('Location: categoria.php');
    $message = "Cegoria elimina con exito!!";

}else{
    header('Location: categoria.php');
    $message = "Hubo un error!!";
}
