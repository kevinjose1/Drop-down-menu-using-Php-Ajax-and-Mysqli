<?php
require_once dirname(__FILE__).'/db_connection.php';
class dbmethods extends db_connection
{
    public $con;
    public function __construct()
    {
    parent:: __construct();
//     $ob=new db_connection();
//     $this->con=$ob->db_connect();
     
  $this->con=parent::db_connect();
    }
	
     public function register($a,$b)
     {
		 $s="insert into student_tabl values(null,'$a','$b')";
       $result=$this->con->query($s);
		 return $result;
       
//            if ($result == TRUE) {
//
//                return "success";
//            } 
//		 else 
//		 {
//                return "failed";
//            }

      
     }
	public function add($m,$n)
	{
		$s="insert into  staff_tabl values(null,'$m','$n')";
		$result=$this->con->query($s);
		 return $result;
		
		
	}
	public function login($u,$p)
	{
		$s="insert into student_login values(null,'$u','$p')";
		$result=$this->con->query($s);
		return $result;
		
		
		
	}
	public function check($x,$y)
	{
		 $s= "SELECT id, user_name, password FROM student_login WHERE user_name='$x' AND password='$y'";
		$result=$this->con->query($s);
		if($result->num_rows>0)
		{
			echo "Login Successfully";
			
		}
		else
		{
			echo "Login failed";
		}

		 
		 

	
	}
}
	?>
	