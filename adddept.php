<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password],input[type=submit] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}



.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>



<form action="" method="post">
  

  <div class="container">
    <label for="uname"><b>Department Name</b></label>
    <input type="text" placeholder="Enter Department Name" name="deptname" required>

   
    <input type="submit" name="submit">
        
    
  </div>

 
</form>
	<?php
	$con= new mysqli('localhost','root','','course');
	if(isset($_POST['submit']))
	{
		
		$deptname= $_POST['deptname'];
		
		$sql="Insert into dept values('','$deptname')";
		$result= mysqli_query($con,$sql);
//		echo $sql;exit;
			 if($result==true)
    {
        echo "Success";
				 				 header('Location:index.php');
    }
 else {
    echo "failed"    ;
    }
}
?>

</body>
</html>
