<?php

function getConnection() {
  $connection = new mysqli('localhost', 'root', '', 'estudiantes');
  if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $connection->connect_error);
    die;
  }
  return $connection;
}


function sendScheduleEmail($recipient, $subject) {

  $output = '';
  $retval = '';
  exec("/home/ubuntu/user/example2.php $recipient $subject", $output, $retval);


  var_dump($output);

}

function saveStudent($estudiante) {
  $conn = getConnection();
  $sql = "INSERT INTO usuarios( `cedula`, `nombre`, `apellido`,`email`, `rol`, `contrasenna`)
          VALUES ('{$estudiante['cedula']}', '{$estudiante['nombre']},'{$estudiante['apellido']}', 
          '{$estudiante['email']}', '{$estudiante['rol']},'{$estudiante['contrasenna']}', '')";
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
  $sql = "SELECT * FROM usuarios WHERE `cedula` = '$username' AND `contrasenna` = '$password'";
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
  $sql = "DELETE FROM usuarios WHERE cedula = $id";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return true;
}