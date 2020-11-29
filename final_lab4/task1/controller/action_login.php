<?php 
include '../task1/model/dbcon.php';

 if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT user FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

      if($count ==1) {
      	echo "Login Successful"";
      }
      else {
      	$error = "Invalid name or id or password";
      	echo $error;
      }
 ?>