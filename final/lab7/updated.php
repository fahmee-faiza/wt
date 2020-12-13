<?php 
 include 'dbcon.php';

 if (isset($_POST['update-btn']))
 {
 	$id = $_POST['id'];
 	$uname = $_POST['uname'];
 	$password = $_POST['password'];
 	$email = $_POST['email'];
 	$birthday = $_POST['birthday'];
 	$query = "UPDATE crudtable SET id='$id', username='$uname', password='$password',email='$email',dob='$birthday' WHERE id='$id'";
 	$query_run = mysqli_query($conn,$query);

 	if($query_run)
 	{
      echo "Updated!";
      header("Location: datatable.php");

 	}
 	else
 	{
 		echo "Not Updated!";

 	}

 }


 ?>