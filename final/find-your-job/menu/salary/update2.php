<!DOCTYPE html>
<html>
<head>
	
  <script src="validation2.js"></script>
	<style>
		
input[type=text]{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  width: 50%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin: auto;
}
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #555555;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #55555}

.button:active {
  background-color: #555555;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
	</style>
</head>
<body>
	<?php  
	include 'dbcon2.php';
     if (isset($_POST['updatedata']))
      {
     	$id = $_POST['update_id'];
     	$sql = "SELECT * FROM salarytable WHERE empID='$id'";
     	$query_run = mysqli_query($conn,$sql);
     	foreach ($query_run as $row) 
     	{
     ?>
     <div>
     <form action="updating2.php" method="POST" onsubmit="return validation()">
    
    <label for="empname">Employee Name</label>
    <input type="text" id="empname" name="empname" value="<?php echo $row['empname'];?>">
    <p id="Pho"></p>

    <label for="empID">ID</label>
    <input type="text" id="empID" name="empID" value="<?php echo $row['empID'];?>">
    <p id="Id"></p>

    <label for="designation">Designation</label>
    <input type="text" id="designation" name="designation" value="<?php echo $row['designation'];?>">
    <p id="Com"></p>

    <label for="salary">Salary</label>
    <input type="text" id="salary" name="salary" value="<?php echo $row['salary'];?>">
    <p id="Des"></p>

    <label for="bonus">Bonus</label>
    <input type="text" id="bonus" name="bonus" value="<?php echo $row['bonus'];?>">
    <p id="Con"></p>



    <button class="button" type="submit" value="submit" name="update-btn">OK</button>
</form>
    </div>


     <?php

     	}
     }

	?>

</body>
</html>