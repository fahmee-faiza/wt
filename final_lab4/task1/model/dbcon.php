<!DOCTYPE html>
<html>
<head>
	<title>DB connection</title>
</head>
<body>
	<?php
        $servername = "localhost";
        $username = "Faiza";
        $password = "12345";

$conn = new mysqli($servername, $username, $password);

//$conn = new mysqli("localhost","Faiza","12345","login_data");

if ($conn->connect_error) {
  die("Connection failed");
}
else{
	echo "Connection Successful";
}
$conn -> close();

?>
</body>
</html>