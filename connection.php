<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "csids";

    $conn = new mysqli($servername,$username,$password,$dbname, 3307);

    if($conn->connect_error){
        die ('connection faild:'.$conn->connect_error);
    }
?>