<?php
include 'dbcon3.php';
include 'insertform3.php';

session_start();


$clientname = mysqli_real_escape_string($conn, $_REQUEST['clientname']);
$clientID = mysqli_real_escape_string($conn, $_REQUEST['clientID']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$contactnum = mysqli_real_escape_string($conn, $_REQUEST['contactnum']);
$company = mysqli_real_escape_string($conn, $_REQUEST['company']);
$postno = mysqli_real_escape_string($conn, $_REQUEST['postno']);


$sql = "INSERT INTO clientlist (clientname, clientID, email, contactnum, company, postno) VALUES ('$clientname', '$clientID', '$email','$contactnum', '$company', '$postno')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";

    setcookie("clientname","$clientname" ,time()+86400);
    setcookie("clientID","$clientID" ,time()+86400);
    $_SESSION['clientname']="$clientname";
    $_SESSION['clientID']="$clientID";

    header("Location: table3.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 

?>