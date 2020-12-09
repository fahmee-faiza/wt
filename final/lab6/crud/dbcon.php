<?php

$conn =  mysqli_connect("localhost","crud","12345678","crudtable");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
