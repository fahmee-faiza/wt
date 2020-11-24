<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
</head>
<body>

      <ul>
    	<?php
		$shops = fopen("/our_project/changepass/change.txt", "r") or die("Unable to update!");
		
		  	while ($allshops=fgets($shops)) 
		  	{	
		  	echo"<li>".$allshops."</li>";
		  	
		  }
		  fclose($shops); 
		  ?> 
     </ul>

</body>
</html>