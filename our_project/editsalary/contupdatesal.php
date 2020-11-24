<!DOCTYPE html>
<html>
<head>
	<title>Update Salary Table</title>
</head>
<body>
	 <ul>
    	<?php
    $clients = fopen("../edtable.txt", "w") or die("Unable to update!");
       
              while ($allclients=fgets($clients))
              {​​​​​   
              echo"<li>".$allclients."</li><button onClick=document.location.href='/our_project/editsalary/updatetable.php'>Updated</button><button onClick=document.location.href='/our_project/editsalary/notupdatedtable.php'>not updated</button>";
             
          }​​​​​
          fclose($clients);
​
		  ?>  
     </ul>


</body>
</html>