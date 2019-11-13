<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form method="post" action="login.php">
    username: 
    <input type="text" name="username" placeholder="username">
    <br>
    password:
    <input type="password" name="password" placeholder="password">
    <br>
    <input type="submit" name="submit" name="submit" value="Login">
</form>

</body>
</html>
<?php
    session_start();
    require_once "functions/validate.php";
    require_once "dblogin.php";

   

    if(isset($_POST['submit'])){
        $username=test_input($_POST['username']);
        $password=test_input($_POST['password']);
        
        //creating conncetion to the db
        $connect= createConn();

        $query="SELECT * From user where username='$username';";

        $result= $connect->query($query);

        if($result->num_rows==1){
            $row=$result->fetch_assoc();

           if (password_verify($password,$row['password'])){
              $_SESSION['username']=$row['username'];
              $type= $_SESSION['type']=$row['accountType'];
              $_SESSION['userid']=$row['userid'];

              switch ($type){
                  case 'seller':
                  header('Location:addinventory.php');
                  exit();

                  case 'buyer':
                  header('Location:buyer_home.php');
                  exit();
              }
           }else{
               echo "password did not match";
           }


        }
        else{
            echo "please enter the correct credentials or create a new account";
        }


    }else{
        echo "hello";
    }