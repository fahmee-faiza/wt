<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="validation5.js"></script>
	<style>
		
input[type=text], [type=date]{
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
	include 'dbcon5.php';
     if (isset($_POST['updatedata']))
      {
     	$id = $_POST['update_id'];
     	$sql = "SELECT * FROM noticeboard WHERE noticeID='$id'";
     	$query_run = mysqli_query($conn,$sql);
     	foreach ($query_run as $row) 
     	{
     ?>
     <div>
     <form action="updating5.php" method="POST" onsubmit="return validation()">

    <label for="noticeID">ID</label>
    <input type="text" id="noticeID" name="noticeID" value="<?php echo $row['noticeID'];?>">
    <p id="Id"></p>

    <label for="date">Date</label>
    <input type="date" id="date" name="date" value="<?php echo $row['date'];?>">
    <p id="Dat"></p>

    <label for="details">Details</label>
    <input type="text" id="details" name="details" value="<?php echo $row['details'];?>">
    <p id="Com"></p>

    



    <button class="button" type="submit" value="submit" name="update-btn">OK</button>
</form>
    </div>


     <?php

     	}
     }

	?>

</body>
</html>