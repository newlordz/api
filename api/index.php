<?php 
    include 'db.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UENR MART</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://kit.fontawesome.com/f4f3139505.js" crossorigin="anonymous"></script>
      
    <link rel="stylesheet" href="style.css">
    
    
</head>
<body onload="cartCount()">
    <section id="header">
        <?php include 'userWrapper.php'; ?>
        <a href="index.php"><img src="img/logo.png" class="logo" alt="" srcset=""></a>
        
        <div>
            <ul id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><span id="cart_n"></span><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a href="#" id="close"><i class="fa fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="fa fa-shopping-bag fa-2x1"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & up to 70% off!</p>
        <a href="connections/signin.html"><button>Shop Now</button></a>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="features/f5.png" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Trending Products</p>
        <div class="pro-container">

        <?php 

$sql= 'SELECT * FROM products
ORDER BY id DESC';
$stmt= $conn->prepare($sql);
$stmt->execute();

#if username Exist
$Products="";
if($stmt->rowCount()!=0){
#fetching user info
$Products= $stmt->fetchAll();


}
foreach($Products as $Product)
    {
        ?>

            <div class="pro">
                <a href="Tees.php?id=<?=$Product['id']?>"><img src="<?=$Product['Photo1']?>" alt=""></a>
                <div class="des">
                    <span><?=$Product['cat']?></span>
                    <h5><?=$Product['Productname']?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star fa-bounce"></i>
                    </div>
                    <h4>Gh¢<?=$Product['price']?> <del>Gh¢<?=$Product['price']?></del></h4>
                </div>
                <i class="fal fa-shopping-cart cart" <?php echo('onclick=\'saveCart("'.$Product['Productname'].'","'.$Product['price'].'","'.$Product['Photo1'].'","'.$Product['warehouse'].'")\'') ?>></i>
            </div>
            <?php
    }  ?>
            <!-- <div class="pro">
                <a href="watch.html"><img src="products/p2.jpg" alt=""></a>
                <div class="des">
                    <span>apple</span>
                    <h5>Smart Watch Vital Plus</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                         <i class="fa-regular fa-star fa-bounce"></i>
                         <i class="fa-regular fa-star fa-bounce"></i>
                        
                    </div>
                    <h4>₵90 <del>₵199</del></h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div> -->
        </div>
    </section>

    <section id="banner" class=".section-m1 ">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% Off</span> - All t-Shirts & Accessories</h2>
       <a href="shop.html"> <button class="normal">Explore More</button></a>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Latest Designs and Models</p>
        <div class="pro-container">
            <!-- <div class="pro">
                <img src="products/n1.jpg" alt="">
                <div class="des">
                    <span>Asics</span>
                    <h5>Womens Party Wear Shoes</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₵98 <del>₵100</del></h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div> -->
            <?php
            foreach($Products as $Product)
    {
        ?>

            <div class="pro">
                <a href="Tees.php?id=<?=$Product['id']?>"><img src="<?=$Product['Photo1']?>" alt=""></a>
                <div class="des">
                    <span><?=$Product['cat']?></span>
                    <h5><?=$Product['Productname']?></h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fa-regular fa-star fa-bounce"></i>
                    </div>
                    <h4>Gh¢<?=$Product['price']?> <del>Gh¢<?=$Product['price']?></del></h4>
                </div>
                <i class="fal fa-shopping-cart cart" <?php echo('onclick=\'saveCart("'.$Product['Productname'].'","'.$Product['price'].'","'.$Product['Photo1'].'","'.$Product['warehouse'].'")\'') ?>></i>
            </div>
            <?php
    }  ?>
        </div>
    </section> 
    
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at UENR MART</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at UENR MART</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2023</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span> </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> University of Energy and Natural Resources, 214 Sunyani,Ghana</p>
            <p><strong>Phone: </strong> +233 554981159 / +233 557705955 </p> 
            <p><strong>Hours: </strong> 10:00 - 18:00, Mon-Sat</p> 
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-whatsapp"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="about.html">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">sign In</a>
            <a href="cart.php">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="pay/app.jpg" alt="">
                <img src="pay/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways </p>
            <img src="pay/pay1.png" alt="">
        </div>

        <div class="copyright">
            <p>© 2023, UENR MART</p>
        </div>
    </footer>

    <script src="script.js"></script>
   <script src="script2.js"></script>
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.0.0/firebase-app.js"></script>
    
</body>
</html>
