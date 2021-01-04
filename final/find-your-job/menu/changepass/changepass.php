<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<style>
  
.header {
  padding: 70px;
  text-align: left;
  background: #555555;
  color: white;
  font-size: 30px;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 88px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */

</style>
<body>

  <div class="header">
  <h2>Find Your Job</h2>
  <h6></h6>
</div>

<?php  
$currpass = $newpass = $confirm = "";
$currErr = $newpassErr = $confirmErr = "";
$status = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["currpass"]) & !empty($_POST["currpass"])) {
    $currpass = test_input($_POST["currpass"]);
  }
  else {
    $currErr = "Please type Current Password";
    $counter = $counter + 1;
  }
  if (isset($_POST["newpass"]) & !empty($_POST["newpass"])) {
    $newpass = test_input($_POST["newpass"]);
  }
  else {
    $newpassErr = "Please type New Password";
    $counter = $counter + 1;
  }
    if (isset($_POST["confirm"]) & !empty($_POST["confirm"])) {
    $confirm = test_input($_POST["confirm"]);
  }
  else {
    $confirmErr = "Please Confirm new password";
    $counter = $counter + 1;
  }
  

  if($counter == 0) {
    $status= "Password Changed successfully !!!!";

    $user = fopen("../change.txt", "a") or die("Unable to Update!");
    fwrite($user, $currpass. "," . $newpass. "," . $confirm);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $status = "Password change Failed";
    $counter = 0;
  }

}

else {
	$status = "Password Change Failed";
}


 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}



?>

  <h1>Change Password</h1>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    	<div>
    		<label for="currpass">Current Password</label>
    		<input type="text" name="currpass">
    		<span><?php echo $currErr;  ?></span>
    	</div>
    	<br>
    	<div>
    		<label for="newpass">New Password</label>
    		<input type="text" name="newpass">
    		<span><?php echo $newpassErr; ?></span>

    	</div>
    	<br>
    	<div>
    		<label for="confirm">Confirm New Password</label>
    		<input type="text" name="confirm">
            <span><?php echo $confirmErr; ?></span>
    	</div>
    	<br>
    	
      <br>
    	<button class="button button4" type="submit" value="submit">submit</button>
      <button class="button button4" type="button" onClick="document.location.href='/find-your-job/fyi/my_profile/table1.php'">Cancel</button>
      <button class="button button4" type="button" onClick="document.location.href='/find-your-job/fyi/my_profile/table1.php'">Go to Profile</button><br>

    	<?php echo $status;  ?>


    </form>
</body>
</html>