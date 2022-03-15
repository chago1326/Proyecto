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
  Values ('[ $id_cedula-1]','[$email-2]','[$nombre-3]','[$apellido-4]','[$contrasenna-5]','[$rol-6]')";

  $query= mysqli_query($conn,$sql);

if($query){
   
      header('Location: index.php');
      $message = "Su usuario a sido guardado!!";
      
  } else {

    header('Location: registro.php');
    $message="Hubo error!!";
  }