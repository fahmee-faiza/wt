<?php

$conn =  mysqli_connect("localhost","faiza","findyourjob","findyourjob");

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>