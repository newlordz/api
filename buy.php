<?php
session_start();
if(isset($_SESSION['name'])&&isset($_SESSION['password'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="carousel.css">
    <title>purchase</title>
    <style>
        section{
            transform: translateX(30%);
            }
        input{
            border-style: none;
            }
        .transactionBtn{
            background-color: rgb(124, 219, 243);
            font-weight: 100px;
            }
        .cancelBtn{
            background-color: orange;
            font-weight: 100px;
            }
        .evi{
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>
<body onload="render()">
<br>
<form action="connections/recordTransaction.php" method="POST" enctype="multipart/form-data">
<section>
<div class="col-md-4">
         <div class="card mb-4 shadow-sm">
                <p class="evi">PAYMENT METHOD</p>
                    <img class="card-img-top" id="images" style="height:16rem;" src="imgIcon.png" alt="Card Image cap">
                
              <div class="card-body">
              <i style="color:orange;" class="fa fa-star"></i>
              <i style="color:orange;" class="fa fa-star"></i>
              <i style="color:orange;" class="fa fa-star"></i>
              <i style="color:orange;" class="fa fa-star"></i>
              <i style="color:orange;" class="fa fa-star"></i>
              <p class="card-text"><input type="text" name="items" id="cart_num" value="Number of items: 0" placeholder="Number of items"></p>
              <p class="card-text"><input type="text" name="totalAmount" id="cart_total" value="Total amount: Gh$ 00.00" ></p> 
              <hr>
              <input type="text" name="name" value="<?=$_SESSION['name']?>" placeholder="Name:" required>
              <input type="email" name="email" value="<?=$_SESSION['email']?>" placeholder="Email:" required>
              <br><br>
              <select name="paymentMethod" id="store" required>
                  <option value="">Payment evidence</option>
                  <option value="Momo">Momo</option>
                  <option value="payPal">PayPal</option>
              </section>
              <input type="file" name="paymentCheck" id="P" required>
              <div class="d-flex justify-content-between align-items-center">
               <div class="btn-group">
                    <button type="submit" onclick="buy()" class="btn btn-sm btn-outline-secondary transactionBtn">Complete transaction</button>
                    <a href="./"><button id="${btn}"type="button" onclick="cart('${FRUIT[con-1].name}','${FRUIT[con - 1].price}','${URL}','${con}','${btn}')" class="btn btn-sm btn-outline-secondary cancelBtn">Cancel</button></a>
                  </div>
                   <small class="text-muted"> Free Shipping </small>
                </div>
               </div>
         </div>
        </div>
    </form>
</body>
<script>
            const preview1 = (file) => {
                const img = document.createElement("img");
                img.src = URL.createObjectURL(file);  // Object Blob
                img.alt = file.name;
                document.querySelector('#images').src=img.src
                };

                document.querySelector("#P").addEventListener("change", (ev) => {
                if (!ev.target.files) return; // Do nothing.
                [...ev.target.files].forEach(preview1);
                document.getElementById("p").style.display="none"
                });
        </script>
        <script src="cart.js"></script>
    
</html>

<?php
    }else{
    
    header("Location: connections/signin.html");
    exit;}
    ?>