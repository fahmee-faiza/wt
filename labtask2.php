<!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
</head>
<body>

	<?php
	  	$idError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["id"])) 
			{
				  $idError = "ID is required";
			}
			else {
				echo "ID is: " . $_REQUEST["id"];
			}
		}

        $nameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["name"])) 
			{
				  $nameError = "Name is required";
			}
			else {
				echo "Name is: " . $_REQUEST["name"];
			}
		}

        $genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["gender"])) 
			{
				  $gernderError = "Gender is required";
			}
			else {
				echo "Gender is: " . $_REQUEST["gender"];
			}
		}
       
        $emailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["email"])) 
			{
				  $emailError = "Email is required";
			}
			else {
				echo "Email is: " . $_REQUEST["email"];
			}
		}
        
        $addressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["address"])) 
			{
				  $addressError = "Address is required";
			}
			else {
				echo "Address is: " . $_REQUEST["address"];
			}
		}
    
        $cityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["city"])) 
			{
				  $cityError = "City is required";
			}
			else {
				echo "City is: " . $_REQUEST["city"];
			}
		}
    
        $stateError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["state"])) 
			{
				  $stateError = "State is required";
			}
			else {
				echo "State is: " . $_REQUEST["state"];
			}
		}
    
        $countryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") 
	  	{
			if(empty($_REQUEST["country"])) 
			{
				  $countryError = "country is required";
			}
			else {
				echo "Country is: " . $_REQUEST["country"];
			}
		}
    ?>

    <hr>

	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<b>Student Id </b><br/> 
    <input type="text" name="id" required>
	<br />
	<span><?php echo $idError; ?></span><br />
        
	<b>Student Name </b><br/>
    <input type="text" name="name" required>
	<br /><br />
    <span><?php echo $nameError; ?></span><br />

    <b>Gender </b><br/>
    <input type="checkbox" name="gender" value="male">Male<br><input type="checkbox" name="gender" value="female">Female  
    <span><?php echo $genderError; ?></span><br />   
    <br> 
        
    <b>Student Email </b><br/>
    <input type="text" name="email" value="@" required>
	<br /><br />
    <span><?php echo $emailError; ?></span><br />
    
    <b>Address  </b><br/>
    <input type="text" name="address" required style=" width:333px">
	<br />  

    Street Address
    <br />
    <input type="text" name="address2"  style=" width:333px">
	<br />
    Address line 2 
    <br/>
    <span><?php echo $addressError; ?></span><br />

    <input type="text" name="city" required>
    <span><?php echo $cityError; ?></span>
    <input type="text" name="state" required style=" width:157px">
    <span><?php echo $stateError; ?></span>
    <br/>
    <span style="margin-right:150px">City</span>
    <span>State/Province/Region</span>
    <br/>
        
    <input type="text" name="zip" >
    <select name="country" style=" width:162px">
    <option value=""></option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Australia">Australia</option>
    <option value="USA">USA</option>
    <option value="UK">UK</option>
    </select>
    <span><?php echo $countryError; ?></span>
    <br/>

    <span style="margin-right:75px">Zip/Postal Code</span>
    <span>Country</span>
	
	<br /><br />
	<input type="submit" value="Save Form" style="color:green; font-weigt:bold">
	</form>
</body>
</html>