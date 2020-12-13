<?php
include 'dbcon.php';
include 'form.php';

$id = mysqli_real_escape_string($conn, $_REQUEST['id']);
$username = mysqli_real_escape_string($conn, $_REQUEST['uname']);
$password = mysqli_real_escape_string($conn, $_REQUEST['Password']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$birthdate = mysqli_real_escape_string($conn, $_REQUEST['birthday']);

$sql = "INSERT INTO crudoperation (id, username, password, email, dob) VALUES ('$id', '$username','$password', '$email','$birthdate')";
if(mysqli_query($conn, $sql)){
    echo "Added data.";
    header("Location: datatable.php");
} else{
    echo "ERROR! $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 




?>

