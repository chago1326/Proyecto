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
  $sql = "SELECT * FROM usuarios WHERE `id_cedula` = '$username' AND `contrasenna` = '$password'";
  $result = $conn->query($sql);

  if ($conn->connect_errno) {
    $conn->close();
    return false;
  }
  $conn->close();
  return $result->fetch_array();
}

