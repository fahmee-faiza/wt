<!DOCTYPE html>
<html>
<head>
	<title>client list</title>
</head>
<body>

      <ul>
    	<?php
		$shops = fopen("../our_project/jobrequest/clientlist.txt", "r") or die("Unable to open file!");
		
		  	while ($allshops=fgets($shops)) 
		  	{	
		  	echo"<li>".$allshops."</li>";
		  	
		  }
		  fclose($shops); 
		  ?> 
     </ul>

</body>
</html>