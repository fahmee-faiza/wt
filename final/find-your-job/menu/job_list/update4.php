<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="validation4.js"></script>
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
	include 'dbcon4.php';
     if (isset($_POST['updatedata']))
      {
     	$id = $_POST['update_id'];
     	$sql = "SELECT * FROM joblist WHERE jobID='$id'";
     	$query_run = mysqli_query($conn,$sql);
     	foreach ($query_run as $row) 
     	{
     ?>
     <div>
     <form action="updating4.php" method="POST" onsubmit="return validation()">
    

    <label for="jobID">ID</label>
    <input type="text" id="jobID" name="jobID" value="<?php echo $row['jobID'];?>">
    <p id="Id"></p>

    <label for="company">Company</label>
    <input type="text" id="company" name="company" value="<?php echo $row['company'];?>">
    <p id="Com"></p>

    <label for="designation">Designation</label>
    <input type="text" id="designation" name="designation" value="<?php echo $row['designation'];?>">
    <p id="Des"></p>

    <label for="contactaddress">Contact Address</label>
    <input type="text" id="contactaddress" name="contactaddress" value="<?php echo $row['contactaddress'];?>">
    <p id="Con"></p>

    <label for="phone">Phone Number</label>
    <input type="text" id="phone" name="phone" value="<?php echo $row['phone'];?>">
    <p id="Pho"></p>

    <label for="date">Date</label>
    <input type="date" id="date" name="date" value="<?php echo $row['date'];?>">
    <p id="Dat"></p>



    <button class="button" type="submit" value="submit" name="update-btn">OK</button>
</form>
    </div>


     <?php

     	}
     }

	?>

</body>
</html>