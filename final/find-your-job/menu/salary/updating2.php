<?php 
 include 'dbcon2.php';

 if (isset($_POST['update-btn']))
 {
 	$empID = $_POST['empID'];
 	$empname = $_POST['empname'];
 	$designation = $_POST['designation'];
 	$salary = $_POST['salary'];
 	$bonus = $_POST['bonus'];

 	$query = "UPDATE salarytable SET empID='$empID', empname='$empname', designation='$designation', salary='$salary', bonus='$bonus' WHERE empID='$empID'";
 	$query_run = mysqli_query($conn,$query);

 	if($query_run)
 	{
      echo "Updated";
      header("Location: table2.php");

 	}
 	else
 	{
 		echo "Not UPDATED";

 	}

 }