<?php include 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UENR MART</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header">
    <?php include 'userWrapper.php'; ?>
        <a href="index.php"><img src="img/logo.png" class="logo" alt="" srcset=""></a>
        
        <div>
            <ul id="navbar">
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a class="active" href="contact.php">Contact</a></li>
                <li id="lg-bag"><a href="cart.php"><i class="fa fa-shopping-bag"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE. We love to hear from You!</p>
    </section>

    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>University of Energy and Natural Resources, 214 Sunyani,Ghana</p>
                </li>
                <li>
                    <i class="fal fa-envelope"></i>
                    <p>contact: enochessel5@gmail.com</p>
                </li>
                <li>
                    <i class="fal fa-phone-alt"></i>
                    <p>contact@554981159&557705955</p>
                </li>
                <li>
                    <i class="fal fa-clock"></i>
                    <p>Monday to Saturday: 10:00am to 6:00pm</p>
                </li>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15828.166301240928!2d-2.343367!3d7.3492284!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdac92a170803d7%3A0x6b48d01bcca4224a!2sUniversity%20of%20Energy%20and%20Natural%20Resources!5e0!3m2!1sen!2sgh!4v1689357442407!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>
        </form>

        <div class="people">
            <div>
                <img src="people/" alt="">
                <p><span>Enoch Essel</span> Senior Programmer <br> Phone: + 233 554981159 <br> Email: enochessel5@gmail.com </p>         
            </div>
            <div>
                <img src="people/" alt="">
                <p><span>Elizabeth Kyeremeh</span> Financial Secretory <br> Phone: + 233 557705955 <br> Email: elizabethagyemangk@gmail.com </p>         
            </div>
            <div>
                <img src="people/" alt="">
                <p><span>Wisdom Boyetey</span> Manager <br> Phone: + 233 597910070 <br> Email: boyeyteywisdom18@gmail.com </p>         
            </div>
            <div>
                <img src="people/" alt="">
                <p><span>Gibreel Mohammed</span>  Manager <br> Phone: + 233 559927233 <br> Email: contact@example.com </p>         
            </div>
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
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">sign In</a>
            <a href="#">View Cart</a>
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
</body>
</html>