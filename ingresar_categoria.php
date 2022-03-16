<?php

include('functions.php');

$conn=getConnection();

$nombres=$_POST['nombres'];

$sql ="INSERT INTO `categorias`(`categoria_nom`) VALUES ('$nombres')";

$query= mysqli_query($conn,$sql);

if ($query){
    header('Location: categoria.php');

    $message = "Su categoria a sido guardado!!";

}else{
    header('Location: categoria.php');

    $message = "Hubo un error!!";

    
}


