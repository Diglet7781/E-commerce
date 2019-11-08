<?php
require_once "dblogin.php";
class User {
  //properties
  protected $firstName;
  protected $lastName;
  protected $email;
  protected $accountType;
  protected $userName;
  protected $password;

  //methods
   public function __construct($firstName,$lastName,$email,$accountType, $userName,$password) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->accountType = $accountType;
    $this->userName = $userName;
    $this->password = $password;
  }


  //get firstname
  public function getfirstName(){
    $fname= $this->firstName;
   
    return $fname;
  }

  //get lastname
  
  public function getlastName(){
    $lname= $this->lastName;
    return $lname;
  }

  //get email
  public function getemail(){
    return $this->email;
  }

  //get username
  public function getusername(){
    return $this->userName;
  }

  //get password
  public function getpassword(){
    return $this->password;
  }

  //get accountType
  public function getaccountType(){
    return $this->accountType;
  }


  //createAccount
  public function createAccount(){
    
    $firstName= $this->getfirstName();
    $lastName=$this->getlastName();
    $email=$this->getemail();
    $userName=$this->getusername();
    $accountType=$this->getaccountType();
    $password=password_hash($this->getpassword(),PASSWORD_DEFAULT);

    $query="INSERT INTO user(firstName, lastName, email,accountType, username, password) 
    VALUES ('$firstName','$lastName','$email','$accountType','$userName','$password')";
   
   return $query;
  }


  

}



?>
