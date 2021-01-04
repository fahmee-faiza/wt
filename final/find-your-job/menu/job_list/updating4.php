<?php 
 include 'dbcon4.php';

 if (isset($_POST['update-btn']))
 {
 	$jobID = $_POST['jobID'];
 	$company = $_POST['company'];
 	$designation = $_POST['designation'];
 	$contactaddress = $_POST['contactaddress'];
 	$phone = $_POST['phone'];
 	$date = $_POST['date'];

 	$query = "UPDATE joblist SET jobID='$jobID', company='$company', designation='$designation', contactaddress='$contactaddress', phone='$phone', date='$date' WHERE jobID='$jobID'";
 	$query_run = mysqli_query($conn,$query);

 	if($query_run)
 	{
      echo "Updated";
      header("Location: table4.php");

 	}
 	else
 	{
 		echo "Not UPDATED";

 	}

 }


 ?>