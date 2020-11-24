<!DOCTYPE html>
<html>
<head>
	<title>Update your Profile Info</title>
</head>
<body>

<?php  
$Name = $EmployeeID = $Designation = $EmailAddress  = $ContactNumber = $Adress = $DateofBirth = $BloodGroup = $Salary = $Bonus = $WorkingHour = "";
$NameErr = $EmployeeIDErr = $DesignationErr = $EmailErr = $ContactErr = $AddressErr = $birthErr = $BloodGroupErr = $salaryErr = $BonusErr = $WorkingHrErr = "";
$status = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["Name"]) & !empty($_POST["Name"])) {
    $Name = test_input($_POST["Name"]);
  }
  else {
    $NameErr = "Please type name";
    $counter = $counter + 1;
  }
  if (isset($_POST["EmployeeID"]) & !empty($_POST["EmployeeID"])) {
    $EmployeeID = test_input($_POST["EmployeeID"]);
  }
  else {
    $EmployeeIDErr = "Please type Employee ID";
    $counter = $counter + 1;
  }
    if (isset($_POST["Designation"]) & !empty($_POST["Designation"])) {
    $Designation = test_input($_POST["Designation"]);
  }
  else {
    $DesignationErr = "Please type Designation";
    $counter = $counter + 1;
  }
  if (isset($_POST["EmailAddress"]) & !empty($_POST["EmailAddress"])) {
    $EmailAddress = test_input($_POST["EmailAddress"]);
  }
  else {
    $EmailErr = "Please type Email";
    $counter = $counter + 1;
  }

  if (isset($_POST["ContactNumber"]) & !empty($_POST["ContactNumber"])) {
    $ContactNumber = test_input($_POST["ContactNumber"]);
  }
  else {
    $ContactErr = "Please type Contact Number";
    $counter = $counter + 1;
  }

   if (isset($_POST["Address"]) & !empty($_POST["Address"])) {
    $Address = test_input($_POST["Address"]);
  }
  else {
    $AddressErr = "Please type Address";
    $counter = $counter + 1;
  }

   if (isset($_POST["DateofBirth"]) & !empty($_POST["DateofBirth"])) {
    $DateofBirth = test_input($_POST["DateofBirth"]);
  }
  else {
    $birthErr = "Please type Date of Birth";
    $counter = $counter + 1;
  }

   if (isset($_POST["BloodGroup"]) & !empty($_POST["BloodGroup"])) {
    $BloodGroup = test_input($_POST["BloodGroup"]);
  }
  else {
    $BloodGroupErr = "Please type Blood Group";
    $counter = $counter + 1;
  }

   if (isset($_POST["Salary"]) & !empty($_POST["Salary"])) {
    $Salary = test_input($_POST["Salary"]);
  }
  else {
    $salaryErr = "Please type Salary";
    $counter = $counter + 1;
  }

   if (isset($_POST["Bonus"]) & !empty($_POST["Bonus"])) {
    $Bonus = test_input($_POST["Bonus"]);
  }
  else {
    $BonusErr = "Please type Bonus";
    $counter = $counter + 1;
  }

   if (isset($_POST["WorkingHour"]) & !empty($_POST["WorkingHour"])) {
    $WorkingHour = test_input($_POST["WorkingHour"]);
  }
  else {
    $WorkingHrErr = "Please type Working Hour";
    $counter = $counter + 1;
  }

  if($counter == 0) {
    $status= " submited successfully !!!!";

    $user = fopen("../updatepro.txt", "a") or die("Unable to Update!");
    fwrite($user, $Name. "," . $EmployeeID. "," . $Designation. "," . $EmailAddress. "," . $ContactNumber. "," . $Adress. "," . $DateofBirth. "," . $BloodGroup. "," . $Salary. "," . $Bonus. "," . $WorkingHour);
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

  <h1>Update Profile Info</h1>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    	<div>
    		<label for="name">Name</label>
    		<input type="text" name="Name">
    		<span><?php echo $NameErr;  ?></span>
    	</div>
    	<br>
    	<div>
    		<label for="EmployeeID">Employee ID</label>
    		<input type="text" name="EmployeeID">
    		<span><?php echo $EmployeeIDErr; ?></span>

    	</div>
    	<br>
    	<div>
    		<label for="Designation">Designation</label>
    		<input type="text" name="Designation">
            <span><?php echo $DesignationErr; ?></span>
    	</div>
    	<br>
    	<div>
    		<label for="EmailAddress">Email Address</label>
    		<input type="text" name="EmailAddress">
    		<span><?php echo $EmailErr; ?></span>
    	</div>
    	<br>
    	<div>
    		<label name="ContactNumber">Contact Number</label>
    		<input type="text" name="ContactNumber">
    		<span><?php echo $ContactErr; ?></span>
    	</div>
    	<br>
      <div>
        <label name="Address">Address</label>
        <input type="text" name="Address">
        <span><?php echo $AddressErr; ?></span>
      </div>
      <br>
      <div>
        <label name="DateofBirth">Date of Birth</label>
        <input type="text" name="DateofBirth">
        <span><?php echo $birthErr; ?></span>
      </div>
      <br>
      <div>
        <label name="BloodGroup">Blood Group</label>
        <input type="text" name="BloodGroup">
        <span><?php echo $BloodGroupErr; ?></span>
      </div>
      <br>
      <div>
        <label name="Salary">Salary</label>
        <input type="text" name="Salary">
        <span><?php echo $salaryErr; ?></span>
      </div>
      <br>
      <div>
        <label name="Bonus">Bonus</label>
        <input type="text" name="Bonus">
        <span><?php echo $BonusErr; ?></span>
      </div>
      <br>
      <div>
        <label name="WorkingHour">Working Hour</label>
        <input type="text" name="WorkingHour">
        <span><?php echo $WorkingHrErr; ?></span>
      </div>
      <br>
    	<button type="submit" value="submit">submit</button>
      <button type="button" onClick="document.location.href='/our_project/my_profile/my_profile.php'">Cancel</button>
      <button type="button" onClick="document.location.href='/our_project/my_profile/my_profile.php'">Go to Profile</button><br>

    	<?php echo $status;  ?>


    </form>
</body>
</html>