<?php
include 'dbcon5.php';
include 'insertform5.php';


$noticeID = mysqli_real_escape_string($conn, $_REQUEST['noticeID']);
$date = mysqli_real_escape_string($conn, $_REQUEST['date']);
$details = mysqli_real_escape_string($conn, $_REQUEST['details']);


$sql = "INSERT INTO noticeboard (noticeID, date, details) VALUES ('$noticeID', '$date', '$details')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location: table5.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 

mysqli_close($conn);
 




?>