<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name ="viewport" content="width=device-width, initial-scale = 1.0">
    <title>title</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>

<style>
    body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.img1 { background-image: url("img/bghome.jpg"); }
.img2 { background-image: url("img/bghome1.jpg"); }
.img3 { background-image: url("img/bghome2.jpg"); }
.img4 { background-image: url("img/bghome3.jpg"); }
.img1 { background-image: url("images/bghome.jpg"); }
.img2 { background-image: url("images/bghome1.jpg"); }
.img3 { background-image: url("images/bghome2.jpg"); }
.img4 { background-image: url("images/bghome3.jpg"); }

.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  font-size: 80px;
  border: 10px solid #f1f1f1;
  position: fixed;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 400px;
  padding: 20px;
  text-align: center;
}
</style>
<body>
<div class="bg-image img1"></div>
<div class="bg-image img2"></div>
<div class="bg-image img3"></div>
<div class="bg-image img4"></div>
<div class="bg-text">THE BEST PCS IN THE METRO</div>

</body>
</html> 