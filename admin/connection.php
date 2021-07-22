<?php

$db_host="localhost";
$user="root";
$pass="";
$db_name="flowweb";
// $db_port="3306";
$conn = new mysqli($db_host,$user,$pass,$db_name);
if($conn->connect_error){
	die("Failed");
}
// else{
// 	echo "Connect";
// }
  

  ?>
