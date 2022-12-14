<?php 
    session_start();
    require ('connection.php');

?>
<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name ="viewport" content="width=device-width, initial-scale = 1.0">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	
</head>
<style>
</style>

<body>
<?php include ('index1.php')?>
<header>
	<div class = "wholeheader">
		
		<img src = "images/icon.png" alt= "icon" class="icon">
		<img src = "images/logo.png" alt= "logo">

		<div class="search-container">
		<form action="/action_page.php">
			<input type="text" placeholder="Search.." name="search">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
		</div>
		<div class = "morebuttons">
			<div class = "mobuttons">
			<form action="notification.php">
			<img src = "images/notification.png" alt= "notif" class="notif">
			</form>
			</div>
			<div class = "mobuttons">
			<form action="profile.php">
			<a href="profile.php"><img src = "images/profile.png" alt= "profile" class="profile" ></a>
			</form>
			</div>
			<div class = "mobuttons">
			<form action="cart.php">
			<img src = "images/cart.png" alt= "cart" class="cart"> 
			</form>
		
			</div>
		
		</div>
		
</header>
</body>

</html>
		
		