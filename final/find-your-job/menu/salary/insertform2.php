<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>
input[type=text]
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
  include 'dbcon2.php'; 
  ?>
  <div>
  <form action="insert2.php" method="POST">


    <label for="empname">Employee Name</label>
    <input type="text" id="empname" name="empname">

    <label for="empID">ID</label>
    <input type="text" id="empID" name="empID">

    <label for="designation">Designation</label>
    <input type="text" id="designation" name="designation">

    <label for="salary">Salary</label>
    <input type="text" id="salary" name="salary">

    <label for="bonus">Bonus</label>
    <input type="text" id="bonus" name="bonus">

   
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>