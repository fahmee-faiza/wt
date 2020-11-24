<!DOCTYPE html>
<html>
<head>
	<title>Update Salary Table</title>
</head>
<body>

<?php  
$ename = $eID = $edesig = $esal = $ebonus = "";
$nameErr = $IDErr = $desErr = $salErr = $bonusErr = "";
$status = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["ename"]) & !empty($_POST["ename"])) {
    $ename = test_input($_POST["ename"]);
  }
  else {
    $nameErr = "Please type Correct name";
    $counter = $counter + 1;
  }
  if (isset($_POST["eID"]) & !empty($_POST["eID"])) {
    $eID = test_input($_POST["eID"]);
  }
  else {
    $IDErr = "Please type Correct ID";
    $counter = $counter + 1;
  }
    if (isset($_POST["edesig"]) & !empty($_POST["edesig"])) {
    $edesig = test_input($_POST["edesig"]);
  }
  else {
    $desErr = "Please Type Designation";
    $counter = $counter + 1;
  }
  if (isset($_POST["esal"]) & !empty($_POST["esal"])) {
    $esal = test_input($_POST["esal"]);
  }
  else {
    $salErr = "Please Update Salary";
    $counter = $counter + 1;
  }
  if (isset($_POST["ebonus"]) & !empty($_POST["ebonus"])) {
    $ebonus = test_input($_POST["ebonus"]);
  }
  else {
    $bonusErr = "Please Update Bonus";
    $counter = $counter + 1;
  }
  

  if($counter == 0) {
    $status= "Updated !!!!";

    $user = fopen("../change.txt", "a") or die("Unable to Update!");
    fwrite($user, $ename. "," . $eID. "," . $edesig. "," . $esal. "," . $ebonus);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $status = "Update Failed";
    $counter = 0;
  }

}

else {
	$status = "Update Failed";
}


 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}



?>

  <h1>Update Salary Table</h1>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    	<div>
    		<label for="ename">Employee Name</label>
    		<input type="text" name="ename">
    		<span><?php echo $nameErr;  ?></span>
    	</div>
    	<br>
    	<div>
    		<label for="eID">Employee ID</label>
    		<input type="text" name="eID">
    		<span><?php echo $IDErr; ?></span>

    	</div>
    	<br>
    	<div>
    		<label for="edesig">Designation</label>
    		<input type="text" name="edesig">
            <span><?php echo $desErr; ?></span>
    	</div>
    	<br>
      <div>
        <label for="esal">Update Salary</label>
        <input type="text" name="esal">
            <span><?php echo $salErr; ?></span>
      </div>
      <br>
      <div>
        <label for="ebonus">Update Bonus</label>
        <input type="text" name="ebonus">
            <span><?php echo $bonusErr; ?></span>
      </div>
      <br>
    	
      <br>
    	<button type="submit" value="submit">submit</button>
      <button type="button" onClick="document.location.href='/our_project/salary/salarytable.php'">Cancel</button>
      <button type="button" onClick="document.location.href='/our_project/menu/menu.php'">Go to menu</button><br>

    	<?php echo $status;  ?>


    </form>
</body>
</html>