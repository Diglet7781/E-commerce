
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
    <link rel="stylesheet" href="homedisplay.css">
</head>
<body>
<?php
require_once "dblogin.php";
session_start();
$userId=$_SESSION['userId'];
echo"the user id is $userId";
$connect=createConn();
$sql="SELECT productid FROM cart WHERE userid='$userId'";
$reasult = $connect->query($sql);
while($row = $reasult->fetch_assoc()){
    $productid=$row["productid"];
    $sqlproduct="SELECT * FROM inventory WHERE productid='$productid'";
    $newReasult=$connect->query($sqlproduct);

   // echo "<div class ='display'>";
    while($nrow=$newReasult->fetch_assoc()){
        //$productname=$nrow["productName"];
        echo "<div class ='display'>";
 
    echo "<br>";
    echo $nrow['productName'];
    echo "<br>";
    $image=$nrow['picture'];
    echo "<img style='height:50px;' src='".$image."'".">";
    echo "<br>";
    echo $nrow['price'];
    echo "<br>";
    
    
echo "</div>";
    
        //echo "the name of the product is $productname";
    }
}
?>



