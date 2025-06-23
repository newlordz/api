<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";


#creating database connection
try{
    $conn= new PDO("mysql:host=$servername; dbname=$db",
     $username,$password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $em){
      echo "connection failed : ".$em->getMessage();
  }?>
