<?php

$employees = simplexml_load_file('../../models/data.xml');//open xml file
$eid = "";
$ename = "";
$edesignation = "";
$esalary = "";
$ebonus = "";

if(isset($_POST['update'])){
  foreach($sal->sal as $sal){
    if($employee['id'] == $_POST['eid']){
        $employee['id'] = $_POST['eid'];
        $employee->name = $_POST['ename'];
        $employee->designation = $_POST['edesignation'];
        $employee->phone = $_POST['esalary'];
        $employee->email = $_POST['ebonus'];
    break;


    }}
  file_put_contents('../../data.xml',$sal->asXML());
  header('Location: sal.php');
 
  foreach($sal->sal as $sal){
    if($employee['id'] == $_POST['eid']){
      $eid = $employee['id'];
      $ename = $employee->name;
      $edesignation = $employee->designation;
      $esalary = $employee->salary;
      $ebonus = $employee->bonus;
    break;
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Salary</title>

</head>
<body>
	 
	 <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link navbar-brand" href="../dashboard.php">Menu <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <section >
        <div class="d-flex justify-content-center"> <h2>Employees!!</h2> </div>
        
        <div class=" d-flex justify-content-around">
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>

     <div class="collapse" id="collapseExample">
        <form class="form-inline my-2 my-lg-0" method="post">
  <div class="container">
  <div class="row">
    
    <div class="col-2">
   
      <input class="form-control mr-sm-2" type="text" name="id" placeholder="ID" aria-label="ID" required>
   
    </div>
    <div class="col-2">
    
      <input class="form-control mr-sm-2" type="text" name="name"  placeholder="name" aria-label="name" required>
   
    </div>
   
    <div class="col-2">
   
      <input class="form-control mr-sm-2" type="text" name="designation" placeholder="designation" aria-label="designation" required>
   
    </div>
     <div class="col-2">
    
      <input class="form-control mr-sm-2" type="text" name="salary" placeholder="salary" aria-label="salary" required>
   
    </div>
    <div class="col-2">
    
      <input class="form-control mr-sm-2" type="text" name="bonus" placeholder="bonus" aria-label="bonus" required>
    
    </div>

     </div>
  </div>
  </form>
</div>

</section>
<!-- main section -->
    <section>
<div class="container">
    <div class="row border-bottom">
        <div class="col-2"><strong>ID</strong> </div>
        <div class="col-2"><strong>Name</strong> </div>
        <div class="col-2"><strong>Designation</strong></div>
        <div class="col-2"><strong>Salary</strong></div>
        <div class="col-2"><strong>Bonus</strong></div>
    </div>
    <div class="row border-bottom" >
      <?php foreach($sal->sal as $sal){?>
        <div class="col-2"><?php echo $employee['id'];?></div>
        <div class="col-2"> <?php echo $employee->name;?></div>
        <div class="col-2"><?php echo $employee->designation;?></div>
        <div class="col-2"><?php echo $employee->salary;?></div>
        <div class="col-2"><?php echo $employee->bonus;?></div>
        <div class="col-1"><a href="sal.php?id=<?php echo $sal['id'];?>" name="edit" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"> edit</a> </div>
      <?php }?>

       </div>
    <div class="collapse" id="collapseExample2">
        <form class="form-inline my-2 my-lg-0" method="post">
  
  <div class="row">
    
    <div class="col-2">
   
      <input class="form-control mr-sm-2" type="text" value = "<?php echo $eid;?>" name="eid" placeholder="ID" aria-label="ID" required>
   
    </div>
    <div class="col-2">
    
      <input class="form-control mr-sm-2" type="text" value = "<?php echo $ename;?>"name="ename"  placeholder="name" aria-label="name" required>
   
    </div>
   
    <div class="col-2">
   
      <input class="form-control mr-sm-2" type="text" value = "<?php echo $edesignation;?>"name="edesignation" placeholder="designation" aria-label="designation" required>
   
    </div>
     <div class="col-2">
    
      <input class="form-control mr-sm-2" type="text" value = "<?php echo $esalary;?>"name="esalary" placeholder="salary" aria-label="salary" required>
   
    </div>
    <div class="col-2">
    
      <input class="form-control mr-sm-2" type="text" value = "<?php echo $ebonus;?>"name="ebonus" placeholder="bonus" aria-label="bonus" required>
    
    </div>
    <div class="col-2">
   
      <input class="btn btn-outline-success ml-3" type="submit" name="update" value="Update">
    
    </div>
  </div>
  
  </form>
</div>
</div>

    </section>
</body>