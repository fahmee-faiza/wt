<?php 
include '../task1/model/dbcon.php';

 if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['psw']); 
      
      $sql = "SELECT user id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      
      $count = mysqli_num_rows($result);

      if($count ==1) {
      	echo "Login Successful"";
       header("Location: /task1/view/balance.php");
       exit();
      }
      else {
      	$error = "Invalid name or id or password";
      	echo $error;
      }
 ?>
