<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>editInventory</title>
</head>
<body>

    <form action="" method="post">
        <input type="hidden" name="id" value ="<?php echo $id;?>"/>
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
       
        <button name="submit" type="submit" value="update">Update</button>
        
</form>
<a href="logout.php">logout</a>
</body>
</html>
<?php
    
    require_once "dblogin.php";
    require_once "class/Seller.php";
    require_once "functions/validate.php";
    $productId=$_GET['id'];
    //echo"this is $productId";
    
    if (isset($_POST["submit"])){
        echo"this sucks";
      
        $productName= $_POST["itemName"];
        $productDescription=$_POST["description"];
        $productQuantity=$_POST["quantity"];
        $productPrice=$_POST["price"];
        $connect = createConn();
        
    
        $sql="UPDATE inventory SET productName='$productName',productDescription='$productDescription',quantity='$productQuantity',price='$productPrice'WHERE productid='$productId'";
       // console.log("hello");
        if($connect->query($sql) === TRUE){
            echo"item updated sucessfully";
            echo'<a href="viewInventory.php"> View Inventory</a>';
        }else{
            echo"Errorr updating record: ". $connect->error;
        }
        
       
    }
   
    ?>