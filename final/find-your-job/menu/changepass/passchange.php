<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
</head>
<body>
	 <ul>
    	<?php
    $clients = fopen("../updatepass.txt", "w") or die("Unable to update!");
       
              while ($allclients=fgets($clients))
              {​​​​​   
              echo"<li>".$allclients."</li><button onClick=document.location.href='/find-your-job/fyi/changepass/changed.php'>changed</button><button onClick=document.location.href='/find-your-job/fyi/changepass/notchanged.php'>not changed</button>";
             
          }​​​​​
          fclose($clients);
​
		  ?>  
     </ul>


</body>
</html>