<?php
include 'dbcon2.php';
include 'insertform2.php';


$empname = mysqli_real_escape_string($conn, $_REQUEST['empname']);
$empID = mysqli_real_escape_string($conn, $_REQUEST['empID']);
$designation = mysqli_real_escape_string($conn, $_REQUEST['designation']);
$salary = mysqli_real_escape_string($conn, $_REQUEST['salary']);
$bonus = mysqli_real_escape_string($conn, $_REQUEST['bonus']);

$sql = "INSERT INTO salarytable (empname, empID, designation, salary, bonus) VALUES ('$empname', '$empID', '$designation', '$salary', '$bonus')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location: table2.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 