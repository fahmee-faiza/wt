<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="validation5.js"></script>
	<style>

input[type=text], [type=date]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] 
{
  width: 100%;
  background-color: #555555;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover 
{
  background-color: #555555;
}

div {
  width: 50%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin: auto;
}

</style>
</head>

<body>
  <?php
  include 'dbcon5.php'; 
  ?>
  <div>
  <form action="insert5.php" method="POST" onsubmit="return validation()">

    <label for="noticeID">Notice ID</label>
    <input type="text" id="noticeID" name="noticeID" placeholder="Notice ID..">
    <p id="Id"></p>

    <label for="date">Date :</label>
    <input type="date" id="date" name="date">
    <p id="Dat"></p>

    <label for="details">Notice</label>
    <input type="text" id="details" name="details">
    <p id="Com"></p>

  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>