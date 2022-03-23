<?php

include('functions.php');

$conn=getConnection();



  $idCedula= $_POST['id_cedula'];
  $nombre=$_POST['nombre']; 
  $apellido=$_POST['apellido'];
  $email=$_POST['email'];
  $contrasenna=$_POST['contrasenna'];
  if($rol=$_POST['tipoUsua'] == 'Administrador'){
    $rol1 = '1';
  }else{
    $rol1 = '2';
  }
  $sqlCon="SELECT usuarios.id_cedula FROM `usuarios` WHERE usuarios.id_cedula = '$idCedula'";
  $quer= mysqli_query($conn,$sqlCon);
  $row=mysqli_fetch_array($quer);
  if($row['id_cedula'] == $idCedula){
    echo "<h2>Su usuario ya existe!!!!</h2>";
    header('Location: registro.php');
  }
  else{
    $sql= "INSERT INTO usuarios(`id_cedula`, `email`, `nombre`, `apellido`, `contrasenna`, `rol_id`)
  Values (' $idCedula','$email','$nombre','$apellido','$contrasenna','$rol1')";
  $query= mysqli_query($conn,$sql);



if($query){
   
      header('Location: index.php');
      echo "<h2>Su usuario a sido guardado!!</h2>";
      
  } else {

    header('Location: registro.php');
    echo "<h2>Hubo error!!</h2>";
  }
  }
