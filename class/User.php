<?php
require_once "../dblogin.php";
class User{
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


  //get name
  public function getName(){
    $fname= $this->firstName;
    $lname= $this->lastName;
    $fullName= $fname.$lname;
    return $fullName;
  }

  //get email
  public function getemail(){
    return $this->email;
  }

  //get username
  public function getusername(){
    return $this->username;
  }

  //get password
  public function getpassword(){
    return $this->password;
  }

  //get accountType
  public function getaccountType(){
    return $this->accountType;
  }

  //validate 
  public function validateUserData(){
    
  }
  //createAccount
  public function createAccount(){
    
  }


  

}



?>
