<?php

$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "csids";  
  
$con = mysqli_connect($host, $user, $password, $db_name, 3307);  
if(mysqli_connect_errno()) {  
  die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  



  ?>