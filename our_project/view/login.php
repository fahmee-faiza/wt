<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>


  <div style="display:inline-block;">
    <?php include 'header.php' ?>
  </div>
   <div>
    <h1>Login</h1>
   <br />
   <form action = "/sample/controller/action_login.php" method = "POST">
      <div>
         <label for="username"><b>Username</b></label>
         <input type="text" name="username"/>
      </div>
      <br /><br />
      <div>
         <label for="psw"><b>Password</b></label>
         <input type="password" name="psw"/>
      </div>
      <br /><br />
      <div>
         <button type="button" onClick="document.location.href='/our_project'">Cancel</button>
         <button type="button" onClick="document.location.href='/our_project/view/signup.php'">Sign Up</button>
         
         <button type="button" onClick="document.location.href='/our_project/menu/menu.php'">Submit</button>
      </div>
   </form>

    <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>