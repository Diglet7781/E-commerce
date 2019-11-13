Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore
 
@Diglet7781 
2
01Diglet7781/E-commerce
 Code Issues 0 Pull requests 0 Projects 0 Wiki Security Insights Settings
E-commerce/class/Seller.php
@raajankhadka raajankhadka made some changes in seller.php
829e58a 2 hours ago
@Diglet7781@raajankhadka
87 lines (67 sloc)  2.19 KB
  
<?php
include "User.php";
require_once "dblogin.php";
class Seller extends User{
    //properties
    private $sellerID;
    private $accountBalance;
    private $totalAddedProduct;
    
    //methods
    public function __construct($productName,$productId,$productDescription,$productQuantity,$productPrice,$productImage) {
        $this->productName = $productName;
        $this->productID = $productId;
        $this->productDescription = $productDescription;
        $this->productQuantity = $productQuantity;
        $this->productPrice=$productPrice;
        $this->productImage = $productImage;
        
      }
   
    //get product name
    public function getproductName(){
        return $this->productName;
    }
    //get product ID
    public function getproductId(){
        return $this->productId;
    }
    //get product description
    public function getproductDescription(){
        return $this->productDescription;
    }
    //get product quantity
    public function getproductQuantity(){
        return $this->productQuantity;
    }
    //get product price
    public function getproductPrice(){
        return $this->productprice;
    }
    //get product image
    public function getproductImage(){
        return $this->productImage;
    }
    //get seller ID
    public function getsellerID(){
        return $this->sellerID;
    }
    //get accountBalance
    public function getaccountBalance(){
        return $this->accountBalance;
    }
    //get totaladdedProduct
    public function totalAddedProduct(){
        return $this->totalAddedProduct;
    }
    //add items to inventory
    public function addItems(){
        $productName= $this->getproductName();
        $productId=$this->getproductId();
        $productDescription=$this->getproductDescription();
        $productQuantity=$this->getproductQuantity();
        $productPrice=$this->getproductPrice();
        $productImage=$this->getproductImage();
        
        $query="INSERT INTO inventory(productid, productname, productdescription,quantity,price,picture) 
        VALUES ('$productId','$productName','$productDescription','$productQuantity','$productPrice','$productImage')";
       
        return $query;
    }
    
}
?>
