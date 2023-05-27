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
   
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

   
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<?php include 'user_header.php'; ?>

    <section id="banner">
        <h4>Welcome to our website</h4>
        <h2>Cheapest mechanic in the west</h2>
        <h1>Order now!</h1>
        <p>terms and service may apply.</p>
        <button>Click Me!</button>
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

    <section id="feaproduct" class="section-p1">
        <h2>Top Sellers</h2>
        <p>high quality, low on price</p>
        <div class="procontainer">
            <div class="pro">
                <img src="msc/wheel1.png" alt="product-1">
                <div class="desc">
                    <span>White Rhino</span>
                    <h5>White Rhino Car Wheel 85cm</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp.50.000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-shopping-basket basket"></i></a>
            </div>
       
            <div class="pro">
                <img src="msc/p2.jpg" alt="product-2">
                <div class="desc">
                    <span>White Rhino</span>
                    <h5>White Rhino Bike Wheel 60cm</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp.35.000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-shopping-basket basket"></i></a>
            </div>
 
            <div class="pro">
                <img src="msc/p3.jpg" alt="product-3">
                <div class="desc">
                    <span>Honda</span>
                    <h5>Bike Oil 0.8L</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp.30.000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-shopping-basket basket"></i></a>
            </div>
 
            <div class="pro">
                <img src="msc/p4.jpg" alt="product-4">
                <div class="desc">
                    <span>Castrol</span>
                    <h5>Car Oil 3L</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Rp.45.000</h4>
                </div>
                <a href="#"><i class="fa-solid fa-shopping-basket basket"></i></a>
            </div>
        </div>
    </section>


<?php include 'footer.php'; ?>



</body>
</html>