<!DOCTYPE html>
<html>
<head>
  <title>Send Message</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 10px 88px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
.button5 {background-color: #555555;} /* Black */

.header {
  padding: 80px;
  text-align: left;
  background: #555555;
  color: white;
  font-size: 30px;
}

</style>

<body>

     <div class="header">
      <h1>Find Your Job</h1>
      <p>Send message to Admin</p>
      </div>


  
          <div>  
          <br>   
          <h2>Message from Admin</h2>
          <br>
          <br/>

          <hr>
          </div>

          <input type="text" style="height:200px; width:400px;">

          <button class="button button5" type="submit">Send Reply</button><br>
          <br>
          <button class="button button5" type="button" onClick="document.location.href='/find-your-job/fyi/menu/menu.php'" text-align: center>Cancel</button>
</body>
</html>