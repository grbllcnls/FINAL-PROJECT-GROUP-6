<?php 
    session_start();
    require ('connection.php');
?>
<?php


if(isset($_SESSION['email'])){
    $query = "SELECT * FROM users WHERE email= '".$_SESSION['email']."'";
    $result = mysqli_query($conn, $query) or 

    die(mysql_error($conn)); 

    if (!$result) die('Query failed: ' . mysqli_error($conn)); 
    while($row = mysqli_fetch_array($result)){ 
    $fname = $row['fullName'];
	$username = $row['username'];
	$email = $row['email'];
	$address= $row['address'];
?>

<html>
<head>	

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Edit Profile</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="profile.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<title>Edit Profile</title>

	
</head>

<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<body>
	

	
<div class="main">
       
       <center> <h2>Profile</h2></center>
        <div class="card">
            <div class="card-body">
			<a href="profile.php"> <i style='font-size:20px; color: #EE3F35;' class='fas'>&#xf104; Back</i></a>
	<br><br>
	
	<form name="form1" method="post" action="editprocess.php">
		<table border="0">
			
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="fname" value="<?php echo $row['fullName']; ?>"></td>
			</tr>
        <tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $row['username']; ?>"></td>
			</tr>
		<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $_SESSION['email'];?>"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text" name="address" value="<?php echo $row['address']; ?>"></td>
			</tr>
		<tr>
				<td><input class="btn btn-danger" type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
    <?php 
}
}
    ?>
    </div>
</body>
</html>