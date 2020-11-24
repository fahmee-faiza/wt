<!DOCTYPE html>
<html>
<style>

#myHeader {
  background-color: lightblue;
  color: black;
  padding: 40px;
  text-align: center;
}

</style>

<body>
<h2 id="myHeader">Salary Table</h2>


<table style="width:60%">
  <tr>
    <th>Employee Name</th>
    <th>Employee ID</th> 
    <th>Designation</th>
    <th>Salary</th>
    <th>Bonus</th>
  </tr>
  <tr>
    <td><center>Fahmee Faiza</td>
    <td><center>37455</td>
    <td><center>Management Head</td>
    <td><center>50,000</td>
    <td><center>20,000</td>
  </tr>
  <tr>
    <td><center>Samir Hossain</td>
    <td><center>34567</td>
    <td><center>Accountant</td>
    <td><center>30,000</td>
    <td><center>14,000</td>
  </tr>
  <tr>
    <td><center>Sazzad Shahriar</td>
    <td><center>33456</td>
    <td><center>Register</td>
    <td><center>25,000</td>
    <td><center>10,000</td>
  </tr>
  <tr>
    <td><center>Rakibul Hasan</td>
    <td><center>33499</td>
    <td><center>Developer</td>
    <td><center>30,000</td>
    <td><center>14,000</td>
  </tr>
  <tr>
    <td><center>Shomita Saha</td>
    <td><center>33789</td>
    <td><center>Reciptionist</td>
    <td><center>17,000</td>
    <td><center>6,000</td>
  </tr>
</table>

<br/>
<button type="button" >Send Salary table to Admin</button><br>
<br>
<button type="button" onClick="document.location.href='/our_project/editsalary/edittable.php'">Edit Info</button><br>
<br>
<button type="button" onClick="document.location.href='/our_project/menu/menu.php'">Go to Menu</button><br>


</body>
</html>
