<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Signup</title>
</head>
<body>
    <form id="inventoryForm"action="editInventory.php" method="post" enctype="multipart/form-data">
        Please fill out the form with updated infromation.
        <br>
       Product Name:<input type="text"name="itemName">
        <br>
        Description:<input type="text"name="description">
        <br>
        Quantity:<input type="text"name="quantity">
        <br>
        Price per item:<input type="text"name="price">
        <br>
       
        <input type="submit"name="Update"value="Update">
        
</form>
<a href="logout.php">logout</a>
</body>
</html>
<?php
    
    require_once "dblogin.php";
    require_once "class/Seller.php";
    require_once "functions/validate.php";

    $id = intval($_GET['id']);
    echo"this is id: $id";
    if (isset($_POST["update"])){
        $productName= $_POST["itemName"];
        $productDescription=$_POST["description"];
        $productQuantity=$_POST["quantity"];
        $productPrice=$_POST["price"];

        $connect = createConn();
        
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }
        echo "Connected successfully";
    

        $sql="UPDATE inventory SET productName='$productName',productDescription='$productDescription',quantity='$productQuantity',price='$productPrice'WHERE productid='$id'";
        console.log("hello");
        if($connect->query($sql) === TRUE){
            echo"item updated sucessfully";
        }else{
            echo"Errorr updating record: ". $connect->error;
        }
        
       
    }

    ?>