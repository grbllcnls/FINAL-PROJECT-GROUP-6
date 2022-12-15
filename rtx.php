<?php 
    session_start();
    require ('connection.php');
?>
<!DOCTYPE html>
<html lang ="en">

    <style>
         ul.products li {
            width: 300;
            display: inline-block;
            vertical-align: top;
            *display: inline;
            *zoom: 2;
            border: 2px solid #666;
            padding: 20px;
        }
        p, h2, h4{
            text-align:center;
            font-weight: bold;
            font-size: 25px;
        }
        .prod {
            width: 400px;
            height: 400px;
        }
        table
        { 
            margin-left: auto;
            margin-right: auto;
        }
    </style>

    <?php 
        $i = 0;
        include_once 'db.php';
        $sql = "SELECT * FROM productsRTXa ORDER BY keyss";
        $result = $con->query($sql);

        //$con->close();
        $dyn_table = '<table border = 1  cellpadding = 20>';
        $dyb_ul = '<ul class="products">';
        while ($row = mysqli_fetch_array($result)) {
            $name =$row["product_name"];
            $price =$row["product_price"];
            $image =$row["product_image"];
            //$desc =$row["product_desc"];

            $dyb_ul .= '<li> 
                            <img class= "prod" src="'.$image.'">'
                            .'<h2>'.$name.'</h2>'
                            .'<b> Product Description: </b> <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit<br> sed do eiusmod tempor incididunt <br>ut labore et dolore magna aliqua.'
                            .'<br><p>'.$price.'</p>'
                            .'<a href="addToCart.php"><h4>Inquire now!</h4></a></li>';

        }
        $dyb_ul .= '</ul>';
    ?>
    <head>
        <meta charset = "UTF-8">
        <meta http-equiv="X-UA-Compatible" content ="IE=edge">
        <meta name ="viewport" content="width=device-width, initial-scale = 1.0">
        <title>title</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <?php include 'header.php' ?>
    <?php include 'navbar4.php' ?>
    <body>
        <?php 
            //echo $dyn_table;
            echo $dyb_ul;
        ?>
    </body>
</html>