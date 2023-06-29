<?php

include 'admin/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'user_header.php'; ?>

    <div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
            <img src="msc/wheel1.png" alt="">
         </div>
         <div class="content">
            <span>Top Sellers</span>
            <h3>Car Wheel</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="msc/p2.jpg" alt="">
         </div>
         <div class="content">
            <span>Top Sellers</span>
            <h3>Bike Wheel</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
            <img src="msc/p3.jpg" alt="">
         </div>
         <div class="content">
            <span>Top Sellers</span>
            <h3>Bike Oil</h3>
            <a href="shop.php" class="btn">shop now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>
    

<section class="category">

<h1 class="heading">shop by category</h1>

<div class="swiper category-slider">

<div class="swiper-wrapper">

<a href="category.php?category=Wheel" class="swiper-slide slide">
   <img src="msc/wheelicon.png" alt="">
   <h3>Wheels</h3>
</a>

<a href="category.php?category=Oil" class="swiper-slide slide">
   <img src="msc/oilicon.png" alt="">
   <h3>Oils</h3>
</a>

<a href="category.php?category=Others" class="swiper-slide slide">
   <img src="msc/bolticon.png" alt="">
   <h3>Others</h3>
</a>

</div>

<div class="swiper-pagination"></div>

</div>

</section>


<section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="msc/f1.png" alt="off-shipping">
            <h6>Discounted price</h6>
        </div>
        <div class="fe-box">
            <img src="msc/f2.png" alt="reliable">
            <h6>Fast and Reliable</h6>
        </div>
        <div class="fe-box">
            <img src="msc/f3.png" alt="cheap">
            <h6>Cheapest Service</h6>
        </div>
        <div class="fe-box">
            <img src="msc/f4.png" alt="trusted">
            <h6>Trusted Business</h6>
        </div>
        <div class="fe-box">
            <img src="msc/f5.png" alt="support">
            <h6>Full 24/7 Support</h6>
      </div>
    </section>


    

<?php include 'footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 3,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>