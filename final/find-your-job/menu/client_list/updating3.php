<?php 
 include 'dbcon3.php';

 if (isset($_POST['update-btn']))
 {
 	$clientID = $_POST['clientID'];
 	$clientname = $_POST['clientname'];
 	$email = $_POST['email'];
 	$contactnum = $_POST['contactnum'];
 	$company = $_POST['company'];
 	$postno = $_POST['postno'];

 	$query = "UPDATE clientlist SET clientID='$clientID', clientname='$clientname', email='$email', contactnum='$contactnum', company='$company', postno='$postno' WHERE clientID='$clientID'";
 	$query_run = mysqli_query($conn,$query);

 	if($query_run)
 	{
      echo "Updated";
      header("Location: table3.php");

 	}
 	else
 	{
 		echo "Not UPDATED";

 	}

 }


 ?>