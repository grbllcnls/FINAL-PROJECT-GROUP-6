<?php 
    session_start();
    require ('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>How to Forgot Password send Mail in PHP?</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container-fluid mt-3">
        <div class="card" style="height:590px;">
            <div class="card-header text-center">
                <h3>CSIDS</h3>
            </div>
            <div class="card-body">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand " href="#">home</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="#">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contect us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php">Profile</a>
                            </li>
                        </ul>
                    </div>
                    <form class="justify-content-end">
                        <?php 
                            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==TRUE) {
                                echo $_SESSION['email']." - <a href='logout.php' class='btn btn-danger'>LOGOUT</a>";
                            }else{
                                echo "<button type='button' class='btn btn-success m-1' data-bs-toggle  ='modal' data-bs-target='#loginModal'>Login</button>
                                <button type='button' class='btn btn-danger m-1' data-bs-toggle='modal' data-bs-target='#RegisterModal'>Register</button>";
                            }
                        ?>
                    </form>
                </nav>
                    <?php 
                        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==TRUE) {
                            echo "<h1 class='text-center mt-5 pt-5'>Welcom to this website</h1>";
                        }
                    ?>
            </div>
        </div>
        
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="loginModalLabel">Login</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="registration.php" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Email : </label>
                                <input type="text" name="email_username" class="form-control" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label>Password : </label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="text-end">
                                <a href="forgotPassword.php" class='btn m-1 text-primary' style="background:transparent;">Forgot Password ?</a>
                            </div>
                            <hr class="mt-0">
                            <div class="text-center">
                                <input type="submit" name="login" value="Login" class="btn btn-primary">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        
        <div class="modal fade" id="RegisterModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="RegisterModalLabel">Register</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="registration.php" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label>Full Name : </label>
                                <input type="text" name="fullName" class="form-control" placeholder="Full Name">
                            </div>

                            <div class="mb-3">
                                <label>User Name : </label>
                                <input type="text" name="username" class="form-control" placeholder="User Name">
                            </div>

                            <div class="mb-3">
                                <label>Email : </label>
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <label>Password : </label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" name="register" value="Register" class="btn btn-primary">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>