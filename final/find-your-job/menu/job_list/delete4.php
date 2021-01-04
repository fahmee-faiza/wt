<?php 
include 'dbcon4.php';

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM joblist WHERE jobID='$jobID'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
   	echo "Deleted Successfull";
   	header("Location: table4.php");
   }
   else 
   {
   	echo  "Not Deleted";
   }

} 

 ?>