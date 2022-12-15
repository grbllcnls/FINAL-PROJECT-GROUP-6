<?php 
    session_start();
    require ('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Profile Page</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="profile.css">

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

    <style>



        </style>
</head>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
<body>

                 
                    
        <div class="main">
       
       <center> <h2>Profile</h2></center>
        <div class="card">
            <div class="card-body">
          <a href = "profileUpdate.php"> <i class='far' style='color: #EE3F35; position: absolute; right: 18%;'>&#xf044; </i></a>   
                <?php 
                
                    if(isset($_SESSION['email'])){
                         $query = "SELECT * FROM users WHERE email= '".$_SESSION['email']."'";
                         $result = mysqli_query($conn, $query) or 

                         die(mysql_error($conn)); 
              
                         if (!$result) die('Query failed: ' . mysqli_error($conn)); 
                         while($row = mysqli_fetch_array($result)){ 
 ?>
                <table>
                    <tbody>
                        <tr>
                            <td>Full Name</td>
                            <td><?php echo $row['fullName']; ?></td>
                        </tr>
                        <tr>
                            <td>Username</td>
                            <td><?php echo $row['username']; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $_SESSION['email'];?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><?php echo $row['address'];?></td>
                        </tr> 
                    </tbody>
                </table>
                <?php 
 }
}
                            ?>
            </div>
        </div>
    </div>
   
</body>
</html>