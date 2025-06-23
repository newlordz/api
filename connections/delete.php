<?php
include '../db.php';
if(isset($_GET['delProductId'])){
  $details=$_GET['delProductId'];
  $sqlDel= " DELETE FROM products
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($details));

header('location: ../admin/productlist.php');
}
if(isset($_GET['delOdId'])){
  $delOdId=$_GET['delOdId'];
  $sqlDel= " DELETE FROM purchases
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($delOdId));

header('location: ../admin/orders.php');
}
if(isset($_GET['user_id'])){
  $user_id=$_GET['user_id'];
  $sqlDel= " DELETE FROM users
          WHERE  id = ?";
  $stmt= $conn ->prepare($sqlDel);
  $stmt->execute(array($user_id));

header('location: ../admin/manageuser.php');
}
?>