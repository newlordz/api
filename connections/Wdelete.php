<?php
include '../db.php';
if(isset($_GET['delProductId'])){
  $details=$_GET['delProductId'];
  $sqlDel= " DELETE FROM products
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($details));

header('location: ../warehouse/productlist.php');
}
if(isset($_GET['delOdId'])){
  $delOdId=$_GET['delOdId'];
  $sqlDel= " DELETE FROM purchases
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($delOdId));

header('location: ../warehouse/orders.php');
}
if(isset($_GET['D_id'])){
  $D_id=$_GET['D_id'];
  $sqlDel= " UPDATE purchases set status='Delivered'
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($D_id));

header('location: ../warehouse/orders.php');
}
?>