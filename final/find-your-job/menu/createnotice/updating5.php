<?php 
 include 'dbcon5.php';

 if (isset($_POST['update-btn']))
 {
 	$noticeID = $_POST['noticeID'];
 	$date = $_POST['date'];
 	$details = $_POST['details'];

 	$query = "UPDATE noticeboard SET noticeID='$noticeID', date='$date', details='$details' WHERE noticeID='$noticeID'";
 	$query_run = mysqli_query($conn,$query);

 	if($query_run)
 	{
      echo "Updated";
      header("Location: table5.php");

 	}
 	else
 	{
 		echo "Not UPDATED";

 	}

 }


 ?>