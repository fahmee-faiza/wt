<?php
include 'dbcon1.php';
include 'insertform1.php';


$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$empID = mysqli_real_escape_string($conn, $_REQUEST['empID']);
$designation = mysqli_real_escape_string($conn, $_REQUEST['designation']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$contactno = mysqli_real_escape_string($conn, $_REQUEST['contactno']);
$address = mysqli_real_escape_string($conn, $_REQUEST['address']);
$birthdate = mysqli_real_escape_string($conn, $_REQUEST['dob']);
$bloodgroup = mysqli_real_escape_string($conn, $_REQUEST['bloodgroup']);
$sal = mysqli_real_escape_string($conn, $_REQUEST['sal']);
$bonus = mysqli_real_escape_string($conn, $_REQUEST['bonus']);
$workinghr = mysqli_real_escape_string($conn, $_REQUEST['workinghr']);

$sql = "INSERT INTO myprofile (name, empID, designation, email, contactno, address, dob, bloodgroup, sal, bonus, workinghr) VALUES ('$name', '$empID', '$designation', '$email','$contactno', '$address', '$birthdate', '$bloodgroup', '$sal', '$bonus', '$workinghr')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location: table1.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 

?>