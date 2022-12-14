<?php 

    require ('connection.php');
    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
.justify-content-end{
    position: absolute;
    left: 1500px;
    top: 20px;
}
    </style>
</head>
<body>
    <div class="container-fluid mt-3">

    
                    <form class="justify-content-end">
                        <?php 
                            if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']==TRUE) {
                                echo $_SESSION['email']." - <a href='logout.php' class='btn btn-danger'>LOGOUT</a>";
                            }else{
                                echo "<a href= 'login.php' button type='button' class='btn btn-success m-1'>Login</button></a>";
                              
                            }
                        ?>
                    </form>
                </nav>
              
            </div>

        
        <div class="modal fade" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="loginModalLabel">Login</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                 
                </div>
            </div>
        </div>

        
</body>
</html>