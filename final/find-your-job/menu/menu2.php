<!DOCTYPE html>
<html>
<head>
  <title>Menu</title>
<style>

.myHeader {
  background-color: lightblue;
  width: 100%;
  padding: 130px;
  text-align: center;
  background-image:url('250.png');
}

.subcontent
{
  background-color: lightgray;
  width: 100%;
  padding:120px;
  text-align: center;  
}

.cardsection
{
  background-color:rgb(56,56,56);
  width: 100%;
  padding:120px;
  text-align: center;
}

.card 
{
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 26.0s;
  width: 30%;
  background-color:rgb(56,56,56);
  float: left;
  margin:10px;
}

.card:hover 
{
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container 
{
  padding: 2px 16px;
}

.card-row
{
  content: "";
  display: table;
  clear: both;
}


</style>
</head>
<body>

  <div class="myHeader" style="color:white">
  <h1>Find Your Job</h1>
  </div>
 
   <div class="subcontent" style="color:white">
   <h2 style="text-align: center;">Menu</h2>
   </div>
     
      <div class="cardsection">
        <div class="card-row">
          <div class="card">
          <div class="container">
          <button type="button" onClick="document.location.href='/our_project/my_profile/my_profile.php'">My Profile</button>
          </div>
          </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/salary/salarytable.php'">Employee Salary</button>
         </div>
         </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/client_list/clientlist.php'">Client List</button>
         </div>
         </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/joblist/joblist.php'">See Job list</button>
         </div>
         </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/createnotice/notice.php'">Create Notice</button>
         </div>
         </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/createnotice/noticeBoard.php'">Notice Board</button>
         </div>
         </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/message/contactwithAdmin.php'">Contact with Admin</button>
         </div>
         </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/message/contactwithClients.php'">Contact with Client</button>
         </div>
         </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/message/contactwithJobSeeker.php'">Contact with Job Seeker</button>
         </div>
         </div>

         <div class="card">
         <div class="container">
         <button type="button" onClick="document.location.href='/our_project/view/login.php'">Log out</button>
         </div>
         </div>
       </div>
         
      </div>
   

</body>
</html>