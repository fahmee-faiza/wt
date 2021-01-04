<?php 
include 'dbcon3.php';

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM clientlist WHERE clientID='$clientID'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
   	echo "Deleted Successfull";
   	header("Location: table3.php");
   }
   else 
   {
   	echo  "Not Deleted";
   }

} 

 ?>