<?php 
 include 'dbcon1.php';

 if (isset($_POST['update-btn']))
 {
 	$empID = $_POST['empID'];
 	$name = $_POST['name'];
 	$designation = $_POST['designation'];
 	$email = $_POST['email'];
 	$contactno = $_POST['contactno'];
 	$address = $_POST['address'];
 	$birthday = $_POST['dob'];
 	$bloodgroup = $_POST['bloodgroup'];
 	$sal = $_POST['sal'];
 	$bonus = $_POST['bonus'];
 	$workinghr = $_POST['workinghr'];

 	$query = "UPDATE myprofile SET empID='$empID', name='$name', designation='$designation', email='$email', contactno='$contactno', address='$address', dob='$birthday', bloodgroup='$bloodgroup', sal='$sal', bonus='$bonus', workinghr='$workinghr' WHERE empID='$empID'";
 	$query_run = mysqli_query($conn,$query);

 	if($query_run)
 	{
      echo "Updated";
      header("Location: table1.php");

 	}
 	else
 	{
 		echo "Not UPDATED";

 	}

 }


 ?>