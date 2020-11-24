<!DOCTYPE html>
<html>
<head>
	<title>Update Salary Table</title>
</head>
<body>

      <ul>
    	<?php
		$shops = fopen("/our_project/editsalary/edtable.txt", "r") or die("Unable to update!");
		
		  	while ($allshops=fgets($shops)) 
		  	{	
		  	echo"<li>".$allshops."</li>";
		  	
		  }
		  fclose($shops); 
		  ?> 
     </ul>

</body>
</html>