<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php  
$name = $email = $phone = $company  = $jobpost= "";
$nameErr = $emailErr = $phoneErr = $companyErr = $jobpostErr =  "";
$status = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $counter = 0;
  if (isset($_POST["name"]) & !empty($_POST["name"])) {
    $name = test_input($_POST["name"]);
  }
  else {
    $nameErr = "Please type  name";
    $counter = $counter + 1;
  }
  if (isset($_POST["email"]) & !empty($_POST["email"])) {
    $email = test_input($_POST["email"]);
  }
  else {
    $emailErr = "Please type  email";
    $counter = $counter + 1;
  }
    if (isset($_POST["phone"]) & !empty($_POST["phone"])) {
    $phone = test_input($_POST["phone"]);
  }
  else {
    $phoneErr = "Please type  phone";
    $counter = $counter + 1;
  }
  if (isset($_POST["company"]) & !empty($_POST["company"])) {
    $company = test_input($_POST["company"]);
  }
  else {
    $companyErr = "Please type  company ";
    $counter = $counter + 1;
  }

  if (isset($_POST["jobpost"]) & !empty($_POST["jobpost"])) {
    $jobpost = test_input($_POST["jobpost"]);
  }
  else {
    $jobpostErr = "Please type amount of jobs";
    $counter = $counter + 1;
  }

  if($counter == 0) {
    $status= " submited successfully !!!!";

    $user = fopen("../clientlist.txt", "a") or die("Unable to open file!");
    fwrite($user, $name. "," . $email. ",". $phone. ",". $company. ",". $jobpost);
    fwrite($user, "\n");
    fclose($user);
  }
  else {
    $status = "submit Failed";
    $counter = 0;
  }

}

else {
	$status = "submit Failed";
}


 function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;

}



?>

  <style> h1 {text-align:center; } </style>
  <h1> Request for job post</h1>
    <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    	<div>
    		<label for="name">name</label>
    		<input type="text" name="name">
    		<span><?php echo $nameErr;  ?></span>
    	</div>
    	<br>
    	<div>
    		<label for="email">email</label>
    		<input type="text" name="email">
    		<span><?php echo $emailErr; ?></span>

    	</div>
    	<br>
    	<div>
    		<label for="phone">phone</label>
    		<input type="text" name="phone">
            <span><?php echo $phoneErr; ?></span>
    	</div>
    	<br>
    	<div>
    		<label for="company">company</label>
    		<input type="text" name="company">
    		<span><?php echo $companyErr; ?></span>
    	</div>
    	<br>
    	<div>
    		<label name="jobpost">job post</label>
    		<input type="text" name="jobpost">
    		<span><?php echo $jobpostErr; ?></span>
    	</div>
    	<br>
    	<button type="submit" value="submit">submit</button>
      <button type="button" onClick="document.location.href='/our_project/jobrequest/showapprovals.php'">next</button><br>

    	<?php echo $status;  ?>


    </form>
</body>
</html>