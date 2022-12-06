<?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "csids";

$conn = mysqli_connect($sname, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}