<?php
class User{
  //properties
  private $firstName;
  private $lastName;
  private $email;
  private $accountType;

  //methods
   public function __construct($firstName,$lastName,$email,$accountType) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->email = $email;
    $this->accountType = $accountType;
  }

  //get name
  public function getName(){
    $fName=$this.firstName ;
    $lName=$this.lastName;
    $fullName= $fName.$lName;
    return $fullName; 
  }

  //get email
  public function getEmail(){
    return $this->email;
  }

  //get accountType
  public function getaccountType(){
    return $this->accountType;
  }

}



?>
