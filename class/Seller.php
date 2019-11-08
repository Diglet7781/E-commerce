<?php
include "User.php";

class Seller extends User{
    //properties
    private $sellerID;
    private $accountBalance;
    private $totalAddedProduct;
    

    //methods


    public function __construct($sellerID,$accountBalance,$totalAddedProduct){
        $this->sellerID = $sellerID;
        $this->accountBalance=$accountBalance;
        $this->totalAddedProduct=$accountBalance;
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
    

}




?>