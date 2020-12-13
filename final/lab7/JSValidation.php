<?php 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["ID"])) {
			echo "ID is empty";		
		}
		else {
			echo "ID is: " . $_REQUEST["ID"];
		}
	} 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["uname"])) {
			echo "User Name is empty";		
		}
		else {
			echo "User Name is: " . $_REQUEST["uname"];
		}
	} 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["Password"])) {
			echo "Password is empty";		
		}
		else {
			echo "Password is: " . $_REQUEST["Password"];
		}
	} 

	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(empty($_REQUEST["email"])) {
			echo "Email is empty";		
		}
		else {
			echo "Email is: " . $_REQUEST["email"];
		}
	} 
?>