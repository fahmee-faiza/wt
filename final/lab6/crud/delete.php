<?php 
include 'dbcon.php';

if(isset($_POST['delete_btn']))
{
   $id = $_POST['delete_id'];
   $query = "DELETE FROM crudoperation WHERE id='$id'";
   $query_run = mysqli_query($conn,$query);
   if ($query_run)
   {
   	echo "Deleted!";
   	header("Location: datatable.php");
   }
   else 
   {
   	echo  "Not Deleted!";
   }

} 

 ?>