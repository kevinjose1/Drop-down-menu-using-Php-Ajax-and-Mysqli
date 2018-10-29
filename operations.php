<?php
require_once 'dbmethods.php';
$object1=new dbmethods();
if(isset($_POST['submit']))
{
	$a= $_POST['studname'];
	$b=$_POST['coursename'];
	$res=$object1->register($a,$b);
	

if($res==true)
{
    // header('Location:../staff/home.php');
    echo "success";
}
}
if(isset($_POST['add1']))
{ 
	$m=$_POST['staffname'];
   $n=$_POST['coursename1'];
	 $res=$object1->add($m,$n);
		 if($res==true)
{
//     
    echo "success";
}
}
if(isset($_POST['sub2']))
{
	$u=$_POST['uname'];
	$p=$_POST['psw'];
	$res=$object1->login($u,$p);
	//echo $u;
	//echo $p;
	if($res==true)
	{
		echo "Success";
	}
	
}
if(isset($_POST['sub1']))
{
	$x=$_POST['uname'];
	$y=$_POST['psw'];
	$res=$object1->check($x,$y);
	
	
}
    



?>