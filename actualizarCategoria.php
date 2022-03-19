<?php
require('functions.php');
$conn=getConnection();

$id_cate=$_POST['id'];
$nombres =$_POST['nombres'];

$sql="UPDATE categorias SET categoria_nom='$nombres' WHERE id='$id_cate'";
 $query=mysqli_query($conn,$sql);

 if($query){
     header('Location: categoria.php');
     $message = "Actulizado correctamente!!";

 }else{
     header('Location: actualizarCategoria.php');
     $message = 'Hubo un error!';
     
 }