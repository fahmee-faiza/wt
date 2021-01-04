<?php
include 'dbcon4.php';
include 'insertform4.php';

session_start();


$jobID = mysqli_real_escape_string($conn, $_REQUEST['jobID']);
$company = mysqli_real_escape_string($conn, $_REQUEST['company']);
$designation = mysqli_real_escape_string($conn, $_REQUEST['designation']);
$contactaddress = mysqli_real_escape_string($conn, $_REQUEST['contactaddress']);
$phone = mysqli_real_escape_string($conn, $_REQUEST['phone']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);

$sql = "INSERT INTO joblist (jobID, company, designation, contactaddress, phone, date) VALUES ('$jobID', '$company', '$designation','$contactaddress', '$phone', '$date')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";

    setcookie("company","$company" ,time()+86400);
    setcookie("jobID","$jobID" ,time()+86400);
    $_SESSION['company']="$company";
    $_SESSION['jobID']="$jobID";

    header("Location: table4.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 

?>