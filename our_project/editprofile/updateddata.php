<!DOCTYPE html>
<html>
<head>
	<title>client list</title>
</head>
<body>

      <ul>
    	<?php
		$shops = fopen("../our_project/editprofile/updatepro.txt", "r") or die("Unable to update!");
		
		  	while ($allshops=fgets($shops)) 
		  	{	
		  	echo"<li>".$allshops."</li>";
		  	
		  }
		  fclose($shops); 
		  ?> 
     </ul>

</body>
</html>