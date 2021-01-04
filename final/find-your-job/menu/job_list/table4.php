<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

#jobtable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#jobtable td, #protable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#jobtable tr:nth-child(even){background-color: #f2f2f2;}

#jobtable tr:hover {background-color: #ddd;}

#jobtable th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #555555;
  color: white;
}

.header {
  padding: 70px;
  text-align: left;
  background: #555555;
  color: white;
  font-size: 30px;
}

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

	</style>
</head>
<body>

  <div class="header">
  <h2>Find Your Job</h2>
  <h6>Job List</h6>
</div>

     <button class="button button4" type="button" onClick="document.location.href='/find-your-job/fyi/job_list/insertform4.php'" text-align: center>Insert new data</button>

     <button class="button button4" type="button" onClick="document.location.href='/find-your-job/fyi/menu/menu.php'">Back to Menu</button>

	<?php
	include 'dbcon4.php';
      $sql = "SELECT * FROM joblist";
      $query_run = mysqli_query($conn,$sql);
      if(mysqli_num_rows($query_run)>0)
      {
      	
      	?>
     
     <table id="jobtable">
     	<thead>
  <tr>

    <br>
    
    <th>Job ID</th>
    <th>Company</th>
    <th>Designation</th>
    <th>Contact Address</th>
    <th>Phone Number</th>
    <th>date</th>
    <th>Modify</th>
  </tr>
</thead>
   <tbody>
   <?php
    while ($row = mysqli_fetch_assoc($query_run))
      	{ 
      		?>
     <tr>
    
    <td><?php echo $row['jobID']; ?></td>
    <td><?php echo $row['company']; ?></td>
    <td><?php echo $row['designation']; ?></td>
    <td><?php echo $row['contactaddress']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['date']; ?></td>


    <td><form action="update4.php" method="POST">
    	<input type="hidden" name="update_id" value="<?php echo $row['jobID'];?>">
    	<button type="submit" name="updatedata" value="submit">Update</button>
       </form>
    	<form action="delete4.php" method="POST">
    	<input type="hidden" name="delete_id" value="<?php echo $row['jobID'];?>">
    	<button type="submit" name="delete_btn">Delete</button></td>
      </form>
  </tr>  
      	<?php 
         
      	}
   ?>
</tbody>

</table>

 	<?php
    }
      else 
      {
      	echo "NO RECORD FOUND";
      }

      ?> 

</body>
</html>