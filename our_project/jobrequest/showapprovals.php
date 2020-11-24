<!DOCTYPE html>
<html>
<head>
	<title>show approvals</title>
</head>
<body>
	 <ul>
    	<?php
		$clients = fopen("../clientlist.txt", "r") or die("Unable to open file!");
		
		  	while ($allclients=fgets($clients)) 
		  	{	
		  	echo"<li>".$allclients."</li><button onClick=document.location.href='/our_project/jobrequest/approved.php'>approved</button><button onClick=document.location.href='/our_project/jobrequest/declained.php'>declined</button>";
		  	
		  }
		  fclose($clients); 
		  ?> 
     </ul>


</body>
</html>