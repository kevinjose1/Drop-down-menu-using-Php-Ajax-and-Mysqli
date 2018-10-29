<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
	<body>

		
		<?php
		$con= mysqli_connect('localhost','root','','course');
					$sql="select * from dept";
					$res=mysqli_query($con,$sql);
					?>
	<div class="container">
		 
  <form method="post" action="">
      <label for="dept">Select Department:</label>
      <select class="form-control" name="dept" onchange="showUser(this.value)">
		  <?php
		  while($row=mysqli_fetch_array($res))
					{?>
        <option value= "<?php echo $row['id'];?>">
			<?php echo $row['dept_name'];?>
		  </option>
		  <?php } ?>
		  
	  </select>
	  <div id="txtHint">
	  </div>
	  <input type="text" name="subject" placeholder="Enter subject name">
	  <input type="submit" name="submit" >
	  <?php
	  if(isset($_POST['submit']))
		{
		  $dept_id= $_POST['dept'];
		  $cour_id=$_POST['cour'];
		  $subject_name= $_POST['subject'];
		  $sql1="insert into subject values (null,$dept_id,$cour_id,'$subject_name')";	
	   $result1= mysqli_query($con,$sql1);
			
			if($result1==true)
			{
				echo "Sucess";
				 header('Location:index.php');
			}
			else
			{
				echo "failed";
			}
		}
	
		?>
			
		
	
		</form>
		</div>
	<script>
	function showUser(str) {
    		if (str == "") {
        		document.getElementById("txtHint").innerHTML = "";
        		return;
    		} else { 
       		 	if (window.XMLHttpRequest) {
            			// code for IE7+, Firefox, Chrome, Opera, Safari
            			xmlhttp = new XMLHttpRequest();
       			 } else {
           			 // code for IE6, IE5
            			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        		}
        		xmlhttp.onreadystatechange = function() {
           			 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                			document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
           			 }
        		};
        		xmlhttp.open("GET","getuser.php?q="+str,true);
        		xmlhttp.send();
   	      }
	}
</script>
	</body>
