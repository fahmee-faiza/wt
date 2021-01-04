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
  include 'dbcon4.php'; 
  ?>
  <div>
  <form action="insert4.php" method="POST">

    <label for="jobID">Job ID</label>
    <input type="text" id="jobID" name="jobID">

    <label for="company">Company</label>
    <input type="text" id="company" name="company">

    <label for="designation">Designation</label>
    <input type="text" id="designation" name="designation" placeholder="Your Designation..">

    <label for="contactaddress">Contact Address</label>
    <input type="email" id="contactaddress" name="contactaddress">

    <label for="phone">Mobile Number</label>
    <input type="text" id="phone" name="phone">

    <label for="date">Date</label>
    <input type="date" id="date" name="date">

   
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>