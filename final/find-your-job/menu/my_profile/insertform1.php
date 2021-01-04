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
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover 
{
  background-color: #45a049;
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
  include 'dbcon1.php'; 
  ?>
  <div>
  <form action="insert1.php" method="POST">

    <label for="empID">ID</label>
    <input type="text" id="empID" name="empID" placeholder="Your ID..">

    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your User name..">

    <label for="designation">Designation</label>
    <input type="text" id="designation" name="designation" placeholder="Your Designation..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Your Email..">

    <label for="contactno">Contact Number</label>
    <input type="text" id="contactno" name="contactno" placeholder="Your Contact Number..">

    <label for="address">Address</label>
    <input type="text" id="address" name="address" placeholder="Your Address..">

     <label for="birthday">Birthday :</label>
    <input type="date" id="birthday" name="birthday" >

    <label for="bloodgroup">Blood Group</label>
    <input type="text" id="bloodgroup" name="bloodgroup" placeholder="Your Blood Group..">

    <label for="sal">Salary</label>
    <input type="text" id="sal" name="sal" placeholder="Your Salary..">

    <label for="bonus">Bonus</label>
    <input type="text" id="bonus" name="bonus" placeholder="Your Bonus..">

    <label for="workinghr">Working Hour</label>
    <input type="text" id="workinghr" name="workinghr" placeholder="Your Working Hour..">

   
  
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>