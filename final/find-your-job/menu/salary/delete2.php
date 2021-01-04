<?php 
include 'dbcon2.php';

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM salarytable WHERE empID='$empID'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
      echo "Deleted Successfull";
      header("Location: table2.php");
   }
   else 
   {
      echo  "Not Deleted";
   }

} 

 ?>