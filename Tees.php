<?php include 'db.php';
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/f4f3139505.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  </head>
  <body onload="cartCount()">
       <section id="header">
       <?php include 'userWrapper.php'; ?>
        <a href="#"><img src="img/logo.png" class="logo" alt="" srcset=""></a>
        
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
<br>
<br>
<br>
<br>
<br>
<br>
     
    <div class = "card-wrapper">
    <?php 

$sql= 'SELECT * FROM products
WHERE id =?';
$stmt= $conn->prepare($sql);
$stmt->execute([$_GET['id']]);

#if username Exist
$Products="";
if($stmt->rowCount()!=0){
#fetching user info
$Products= $stmt->fetchAll();

}
foreach($Products as $Product)
    {
        ?>
      <div class = "card">
        <!-- card left -->
        <div class = "product-imgs">
          <div class = "img-display">
            <div class = "img-showcase">
              <img src = "<?=$Product['Photo1']?>" alt = "shoe image" >
              <img src = "<?=$Product['Photo1']?>" alt = "shoe image">
              <img src = "<?=$Product['Photo2']?>" alt = "shoe image">
              <img src = "<?=$Product['Photo3']?>" alt = "shoe image">
            </div>
          </div>
          <div class = "img-select">
            <div class = "img-item">
              <a href = "#" data-id = "1">
                <img src = "<?=$Product['Photo1']?>" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "2">
                <img src = "<?=$Product['Photo1']?>" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "3">
                <img src = "<?=$Product['Photo2']?>" alt = "shoe image">
              </a>
            </div>
            <div class = "img-item">
              <a href = "#" data-id = "4">
                <img src = "<?=$Product['Photo3']?>" alt = "shoe image">
              </a>
            </div>
          </div>
        </div>
        <!-- card right -->
        <div class = "product-content">
          <h2 class = "product-title"><?=$Product['Productname']?></h2>
          <a href = "https://www.nike.com/" class = "product-link">visit Summer T-Shirt store</a>
          <div class = "product-rating">
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star"></i>
            <i class = "fas fa-star-half-alt"></i>
            <i class = "fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class = "product-price">
            <p class = "last-price">Old Price: <span>₵190.00</span></p>
            <p class = "new-price">New Price: <span>₵<?=$Product['price']?> (5%)</span></p>
          </div>

          <div class = "product-detail">
            <h2>about this item: </h2>
            <?=$Product['details']?>
            <ul>
              <li>Color: <span>Yellow/Cream/Gray/Orange</span></li>
              <li>Available: <span>in stock</span></li>
              <li>Category: <span>T-Shirts</span></li>
              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class = "purchase-info">
            <!-- <input type = "number" min = "0" value = "1"> -->
            <button type = "button" class = "btn"
            <?php echo('onclick=\'saveCart("'.$Product['Productname'].'","'.$Product['price'].'","'.$Product['Photo1'].'","'.$Product['warehouse'].'")\'') ?>>
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
            
          </div>

          <div class = "social-links">
            <p>Share At: </p>
            <a href = "#">
              <i class = "fab fa-facebook-f"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-twitter"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-instagram"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-whatsapp"></i>
            </a>
            <a href = "#">
              <i class = "fab fa-pinterest"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php
    }  ?>
    <script src="script2.js"></script>
    <script src="script1.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.29.2/dist/sweetalert2.all.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.0.0/firebase-app.js"></script>
    
  </body>
</html>