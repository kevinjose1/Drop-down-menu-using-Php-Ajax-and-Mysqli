<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		#mytab
		{
			color: red;
			font-size: 18px;
		}
	
	</style>
  <title>Student Details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h2>Student Table</h2>
		 <table class="table table-bordered" id="mytab">
    <thead>
      <tr>
        <th>Student Name</th>
		  <th>Course Name</th>
		</tr>
		</thead>
		


<?php
$con= new mysqli('localhost','root','','parentportal');
$sql="select * from student_tabl";
$res= mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($res))
	{
		echo"<tr>";
		echo "<td>". $row['stud_name']."</td>";
		echo "<td>". $row['cour_name']. "</td>";
		echo"</tr>";
	}
?>
			</table>
	</div>
	</body>
</html>