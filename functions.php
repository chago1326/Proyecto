<?php

function getConnection() {
  $connection = new mysqli('localhost', 'root', '', 'proyecto');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}


function authenticate($username, $password){
  $conn = getConnection();
  $sql = "SELECT usuarios.id_cedula,usuarios.nombre,usuarios.apellido,roles.tipo_rol FROM `usuarios`,`roles` 
  WHERE usuarios.id_cedula = '$username' AND usuarios.contrasenna = '$password' and usuarios.rol_id = roles.id_rol;";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return $result->fetch_array();
}

