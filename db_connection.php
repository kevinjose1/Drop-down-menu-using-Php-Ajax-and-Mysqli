<?php
class db_connection
{
private $host,$username,$password,$dbname;
public $con,$value;
public function __construct() 
        {
        error_reporting(1);
}

public function db_connect()
{
$this->host="localhost";
$this->username="root";
$this->password="";
$this->dbname="parentportal";
$this->con=mysqli_connect($this->host,$this->username,$this->password,$this->dbname);
if(!$this->con)
{
    echo "<h2> Connection failed </h2>";
    exit();
}
else
{
 return $this->con;   
}
}
}
?>
