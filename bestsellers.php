<!DOCTYPE html>
<html lang ="en">
<head>
    <meta charset = "UTF-8">
    <meta http-equiv="X-UA-Compatible" content ="IE=edge">
    <meta name ="viewport" content="width=device-width, initial-scale = 1.0">
    <title>title</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bestsellersCSS.css">
</head>
<?php include 'header.php' ?>
<?php include 'navbar1.php' ?>
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

<div class="featured-product-wrapper">
<div class="featured-product" id="test">
  <div class="container">
    <div class="featured-product__inner">
        <div class="featured-product__img">
          <img src="images/bestsellerpc.webp" alt="bestsellerpc">
        </div>
      <div class="featured-product__caption product product__details">
        <div class="product-details">
          <div class="product-tag">BEST SELLER</div>
          <h2 class="featured-product__title section-heading">Jeezus Elite PC</h2>
          <div class="product-description">
            Take your gaming experience to the stars and beyond. Play modern AAA titles<br> at 4K with a smooth, exciting experience. This PC is built to exceed expectations.
          </div>
          <div class="featured-product__tech-specs">
              <div class="cpu">Intel Core i5-13600K</div>
              <div class="graphics_card">GeForce RTX™ 3080 10GB</div>
              <div class="ram">32GB DDR5 5200 CL40 (2x16GB)</div>
          </div>
          <div class="product-details__price">
              <span class="price sale-price">₱85,499 PHP</span>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>
		
		