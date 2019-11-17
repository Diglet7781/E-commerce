<?php
session_start();
?>
<?php
require_once "dblogin.php";
$id=$_GET['id'];
$userId=$_SESSION['userId'];
$connect = createConn();
$sql="INSERT INTO cart(productid,userid)VALUES('$id','$userId')";
// console.log("hello");
 if($connect->query($sql) === TRUE){
     echo"item updated sucessfully";
 }else{
     echo"Errorr updating record: ". $connect->error;
 }

?>