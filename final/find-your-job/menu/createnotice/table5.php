<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>

#notable {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#notable td, #notable th {
  border: 1px solid #ddd;
  padding: 8px;
}

#notable tr:nth-child(even){background-color: #f2f2f2;}

#notable tr:hover {background-color: #ddd;}

#notable th {
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
  <h6>Notice List</h6>
</div>

     <button class="button button4" type="button" onClick="document.location.href='/find-your-job/fyi/noticeboard/insertform5.php'" text-align: center>Insert new data</button>

     <button class="button button4" type="button" onClick="document.location.href='/find-your-job/fyi/menu/menu.php'">Back to Menu</button>

	<?php
	include 'dbcon5.php';
      $sql = "SELECT * FROM noticeboard";
      $query_run = mysqli_query($conn,$sql);
      if(mysqli_num_rows($query_run)>0)
      {
      	
      	?>
     
     <table id="notable">
     	<thead>
  <tr>
    
    <th>Notice ID</th>
    <th>Date</th>
    <th>Details</th>
    <th>Modify</th>
  </tr>
</thead>
   <tbody>
   <?php
    while ($row = mysqli_fetch_assoc($query_run))
      	{ 
      		?>
     <tr>
    
    <td><?php echo $row['noticeID']; ?></td>
    <td><?php echo $row['date']; ?></td>
    <td><?php echo $row['details']; ?></td>
    

    <td><form action="update5.php" method="POST">
    	<input type="hidden" name="update_id" value="<?php echo $row['noticeID'];?>">
    	<button type="submit" name="updatedata" value="submit">Update</button></form>
    	<form action="delete5.php" method="POST">
    	<input type="hidden" name="delete_id" value="<?php echo $row['noticeID'];?>">
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