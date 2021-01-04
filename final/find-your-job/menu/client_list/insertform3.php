<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
input[type=text], [type=date], [type=email]
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
  include 'dbcon3.php'; 
  ?>
  <div>
  <form action="insert3.php" method="POST">

    <label for="clientID">Client ID</label>
    <input type="text" id="clientID" name="clientID">

    <label for="clientname">Client Name</label>
    <input type="text" id="clientname" name="clientname">

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <label for="contactnum">Contact Number</label>
    <input type="text" id="contactnum" name="contactnum">

    <label for="company">Company</label>
    <input type="text" id="company" name="company">

    <label for="postno">Number of post</label>
    <input type="text" id="postno" name="postno">

   
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>