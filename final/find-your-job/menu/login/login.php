<!DOCTYPE html>
<html>
<head>
	<title></title>
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

input[type=button] 
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

input[type=button]:hover 
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


  <div>
  <form action="insert.php" method="POST">

    <label for="name">Name</label>
    <input type="text" id="name" name="name">

    <label for="id">ID :</label>
    <input type="text" id="id" name="id" >

    <label for="password">Password</label>
    <input type="text" id="password" name="password">

    <br>
    <input type="button" onClick="document.location.href='/find-your-job/fyi/menu/menu.php'" value="Submit">
    
    
  </form>
</div>
</body>
</html>