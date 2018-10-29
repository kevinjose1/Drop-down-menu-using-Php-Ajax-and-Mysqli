<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
	#h3
		{
			padding: 200px;
			text-align: center;
		}
	</style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Parent Portal</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addstudent.php">Add Student</a></li>
          <li><a href="viewstudent.php">View Details</a></li>
			 <li><a href="studentlogin.php">Student Login</a></li>
         
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Staff<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addstaff.php">Add Staff</a></li>
          <li><a href="viewstaff.php">View Staff</a></li>
         
        </ul>
      </li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3 id="h3">Welcome to Parent Portal.</h3>
	</div>
</body>
</html>
