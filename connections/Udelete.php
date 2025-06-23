<?php
include '../db.php';
if(isset($_GET['delProductId'])){
  $details=$_GET['delProductId'];
  $sqlDel= " DELETE FROM products
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($details));

header('location: ../dashboard/productlist.php');
}
if(isset($_GET['delOdId'])){
  $delOdId=$_GET['delOdId'];
  $sqlDel= " DELETE FROM purchases
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($delOdId));

header('location: ../dashboard/orders.php');
}
if(isset($_GET['statOdId'])){
  $statOdId=$_GET['statOdId'];
  $sqlDel= " UPDATE purchases set status='Received'
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($statOdId));

header('location: ../dashboard/orders.php');
}
?>