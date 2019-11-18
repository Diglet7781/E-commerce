
<?php
require_once "dblogin.php";
session_start();
$id=$_GET['id'];
$userId=$_SESSION['userId'];
$connect = createConn();
$sql="INSERT INTO cart(productid,userid)VALUES('$id','$userId')";
// console.log("hello");
 if($connect->query($sql) === TRUE){
     echo"item added sucessfully";
 }else{
     echo"Errorr updating record: ". $connect->error;
 }
 header('Location:viewCart.php');
?>