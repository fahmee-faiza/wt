<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		
input[type=text], [type=date],[type=Email]{
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
  background-color: #555555;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #555555;
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
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
	</style>
</head>
<body>


	<?php  
	include 'dbcon1.php';
     if (isset($_POST['updatedata']))
      {
     	$id = $_POST['update_id'];
     	$sql = "SELECT * FROM myprofile WHERE empID='$id'";
     	$query_run = mysqli_query($conn,$sql);
     	foreach ($query_run as $row) 
     	{
     ?>
     <div>
     <form action="updating1.php" method="POST">
    
    <label for="name">User Name</label>
    <input type="text" id="name" name="name" value="<?php echo $row['name'];?>">

    <label for="empID">ID</label>
    <input type="text" id="empID" name="empID" value="<?php echo $row['empID'];?>">

    <label for="designation">Designation</label>
    <input type="text" id="designation" name="designation" value="<?php echo $row['designation'];?>">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?php echo $row['email'];?>">

    <label for="contactno">Contact Number</label>
    <input type="text" id="contactno" name="contactno" value="<?php echo $row['contactno'];?>">

    <label for="address">Address</label>
    <input type="text" id="address" name="address" value="<?php echo $row['address'];?>">

    <label for="birthday">Birthday :</label>
    <input type="text" id="birthday" name="birthday" value="<?php echo $row['dob'];?>">

    <label for="bloodgroup">Blood Group</label>
    <input type="text" id="bloodgroup" name="bloodgroup" value="<?php echo $row['bloodgroup'];?>">

    <label for="sal">Salary</label>
    <input type="text" id="sal" name="sal" value="<?php echo $row['sal'];?>">

    <label for="bonus">Bonus</label>
    <input type="text" id="bonus" name="bonus" value="<?php echo $row['bonus'];?>">

    <label for="workinghr">Working Hour</label>
    <input type="text" id="workinghr" name="workinghr" value="<?php echo $row['workinghr'];?>">



    <button class="button" type="submit" value="submit" name="update-btn">OK</button>
</form>
    </div>


     <?php

     	}
     }

	?>

</body>
</html>