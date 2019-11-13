
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Signup</title>
</head>
<body>
    <form id="inventoryForm"action="addinventory.php" method="post">
       Product Name:<input type="text"name="itemName">
        <br>
        ProductType:<input type="text"name="productType">
        <br>
        Description:<input type="text"name="description">
        <br>
        Quantity:<input type="text"name="quantity">
        <br>
        Price per item:<input type="text"name="price">
        <br>
        pictures:<input type="file"name="picture">
        <br>
        <input type="submit"name="add"value="add">
        
</form>
<a href="logout.php">logout</a>
</body>
</html>
<?php
    
    require_once "dblogin.php";
    require_once "class/Seller.php";
    require_once "functions/validate.php";

   // $username=$_SESSION['username'];
   // $type= $_SESSION['type'];
   session_start();
   
    $sellerId=$_SESSION["userId"];

   echo  $_SESSION["userId"];

   // session_start();
   // if(isset($_SESSION['accountType']))
   // {
      //  if($_SESSION['accountType']=='seller')
       // {
    
    if (isset($_POST["add"])){
        $productName= test_input($_POST["itemName"]);
        $ProductType=test_input($_POST["productType"]);
        $productDescription=test_input($_POST["description"]);
        $productQuantity=test_input($_POST["quantity"]);
        $productPrice=test_input($_POST["price"]);
        $productImage=test_input($_POST["picture"]);
       
          //validate input fields and verify
        //itemValidate($productName,$productType,$productDescription,$productQuantity,$productPrice,$productImage); 
        $products= new Seller($productName,$productType,$productDescription, $productQuantity, $productPrice, $productImage,$_SESSION["userId"]);
        $connect = createConn();
        $result=$connect->query($products->addItems()); 
        if (!$result){
            die($connect->error);
        }
        else{
            echo "item added sucessfully";
            header('Location:logout.php');
        }
    }
?>
