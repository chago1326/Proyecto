<?php

function getConnection() {
  $connection = new mysqli('localhost', 'root', '', 'proyecto');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}




function registrarUsuario($usuario) {
  $conn = getConnection();
  $sql = "INSERT INTO usuarios( `id_cedula`,`email`, `nombre`, `apellido`,`contrasenna`, `rol_id`)
          VALUES ('{$usuario['id_cedula']}', '{$usuario['email']},'{$usuario['nombre']}', 
          '{$usuario['apellido']}', '{$usuario['contrasenna']},'{$usuario['rol_id']}', '')";
  $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}



function getStudents(){
  $conn = getConnection();
  $sql = "SELECT * FROM usuarios";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return [];
  }
  $conn->close();
  return $result;
}


function authenticate($username, $password){
  $conn = getConnection();
  $sql = "SELECT * FROM usuarios WHERE `id_cedula` = '$username' AND `contrasenna` = '$password'";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return $result->fetch_array();
}


function deleteStudent($id){
  $conn = getConnection();
  $sql = "DELETE FROM usuarios WHERE id_cedula = $id";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}