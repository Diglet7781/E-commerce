<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Signup</title>
</head>
<body>
    
    <form action="signup.php" method="post">
        firstName:<input type="text" name="fname" placeholder="fname">
        <br>
        lastName:<input type="text" name="lname" placeholder="lname">
        <br>
        email:<input type="email" name="email" placeholder="email">
        <br>
        accountType:<input type="text" name="accountType" placeholder="buyer/seller">
        <br>
        username:<input type="text" name="username" placeholder="username">
        <br>
        password:<input type="password" name="password" placeholder="password">
        <br>
        confirm-password:<input type="password" name="confirm-password" placeholder="confirm-password">
        <br>
        <button name="submit" type="submit">createAccount</button> 

    </form>   
</body>
</html>


<?php



require_once "functions/validate.php";
require_once "class/User.php";
require_once "dblogin.php";

//processing the form

if (isset($_POST["submit"])){
    $connect = createConn();

    //get data from the user for Registration
    $firstName = cleanVar(test_input($_POST["fname"]),$connect);
    $lastName = cleanVar(test_input($_POST["lname"]),$connect);
    $email = cleanVar(test_input($_POST["email"]),$connect);
    $accountType = cleanVar(test_input($_POST["accountType"]),$connect);
    $username = cleanVar(test_input($_POST["username"]),$connect);
    $password = test_input($_POST["password"]);
    $confirmPassword = test_input($_POST["confirm-password"]);
    
//validate user input fields with certain restrictions
    validate($firstName,$lastName,$email,$accountType,$username,$password,$confirmPassword); 

    //after validation , create object if validation sucess , create object and pass values to the constructor 
    // after creating object push the data to the database abd registration sucessful

    //creaating user object once all the data are validated
    $user= new User($firstName,$lastName,$email,$accountType,$username,$password);

    $user->createAccount();





}


