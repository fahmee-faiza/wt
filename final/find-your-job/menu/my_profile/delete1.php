<?php 
include 'dbcon1.php';

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM myprofile WHERE empID='$empID'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
   	echo "Deleted Successfull";
   	header("Location: table1.php");
   }
   else 
   {
   	echo  "Not Deleted";
   }

} 

 ?>