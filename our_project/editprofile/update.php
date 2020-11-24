<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
</head>
<body>
	 <ul>
    	<?php
    $clients = fopen("../updatepro.txt", "w") or die("Unable to update!");
       
              while ($allclients=fgets($clients))
              {​​​​​   
              echo"<li>".$allclients."</li><button onClick=document.location.href='/our_project/editprofile/updated.php'>updated</button><button onClick=document.location.href='/our_project/editprofile/notupdated.php'>not updated</button>";
             
          }​​​​​
          fclose($clients);
​
		  ?>  
     </ul>


</body>
</html>