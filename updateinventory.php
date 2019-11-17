<?php
session_start();
?>

<form id="inventoryForm"action="addinventory.php" method="post" enctype="multipart/form-data">
Product Name:<input type="text"name="itemName">
 <br>
 ProductType:
 Book
 <input type="radio"name="productType" value="book">
 Apparel
 <input type="radio" name="productType" value="apparel">
 <br>
 Description:<input type="text"name="description">
 <br>
 Quantity:<input type="text"name="quantity">
 <br>
 Price per item:<input type="text"name="price">
 <br>
 pictures:<input type="file"name="picture">
 <br>
 <input type="submit"name="update" value="update">
 
</form>
<?php
if(isset($_POST['update'])){
    $productId=$_SESSION['productid']
}