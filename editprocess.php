<?php 
    session_start();
    require ('connection.php');
    
  //getting id from url
  if(isset($_POST['update']))
  {	
  
  $uname= mysqli_real_escape_string($conn, $_POST['username']);
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);	
  $address = mysqli_real_escape_string($conn, $_POST['address']);
  if(empty($fname) || empty($uname) || empty($email) || empty($address)) {	
    if(empty($fname)) {
    echo '<font color="red">Name field is empty.</font><br>';
    }
    if(empty($uname)) {
    echo '<font color="red">Username field is empty.</font><br>';
    }
    if(empty($email)) {
    echo '<font color="red">Email field is empty.</font><br>';
    }		
    if(empty($address)) {
      echo '<font color="red">Address field is empty.</font><br>';
      }		
    } else {	

$result = mysqli_query($conn, "UPDATE users SET fullName='$fname', username='$uname',email='$email', address='$address' WHERE email= '".$_SESSION['email']."'");
header("Location: profile.php");
}
  }
?>