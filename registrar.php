<?php

include('functions.php');

$conn=getConnection();



  $id_cedula= $_POST['id_cedula'];
  $nombre=$_POST['nombre']; 
  $apellido=$_POST['apellido'];
  $email=$_POST['email'];
  $contrasenna=$_POST['contrasenna'];
  $rol=$_POST['tipo_usua'];

  $sql= "INSERT INTO usuarios(`id_cedula`, `email`, `nombre`, `apellido`, `contrasenna`, `rol_id`)
  Values (' $id_cedula','$email','$nombre','$apellido','$contrasenna','$rol')";
  $query= mysqli_query($conn,$sql);

if($query){
   
      header('Location: index.php');
      $message = "Su usuario a sido guardado!!";
      
  } else {

    header('Location: registro.php');
    $message="Hubo error!!";
  }