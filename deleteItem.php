<?php
    require_once "dblogin.php";
    session_start();
    $id=$_SESSION['id'];
    echo"your id is $id";
    $connect = createConn();
    if ($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    }
    echo "Connected successfully";
    $sql= "Delete FROM inventory WHERE productid='$id'";
    if($connect->query($sql) === TRUE){
        echo"item deleted sucessfully";
    }else{
        echo"Errorr deleting record: ". $connect->error;
    }
    ?>