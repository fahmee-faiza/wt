<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>

<h1>Login</h1>
<body>
   <form action = "../task1/controller/action_login.php" method = "POST">
      <div>
         <label for="username"><b>User Name</b></label>
         <input type="text" name="username"/>
      </div>
      <br /><br />
      <div>
         <label for="id"><b>User ID</b></label>
         <input type="text" name="id"/>
      </div>
      <br /><br />
      <div>
         <label for="psw"><b>Password</b></label>
         <input type="password" name="psw"/>
      </div>
      <br /><br />
      <div>
         <button type="submit" value=" Submit">Submit</button>
         <button type="button" onClick="document.location.href='/final/task1/view/updatebal.php'">Balance</button>
      </div>
   </form>

</body>
</html>