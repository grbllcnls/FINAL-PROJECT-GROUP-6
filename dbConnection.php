<?php

$sname= 'localhost';

$uname= 'root';

$password = '';

$db_name = 'csids';



$conn = mysqli_connect($sname, $uname, $password, $db_name, 3307);

if ($conn) {
    echo "Connected!";
  } else {
    echo "Connection Failed";
  }
  ?>