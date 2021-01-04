<?php 
include 'dbcon5.php';

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM noticeboard WHERE noticeID='$noticeID'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
   	echo "Deleted Successfully";
   	header("Location: table5.php");
   }
   else 
   {
   	echo  "Not Deleted";
   }

} 

 ?>