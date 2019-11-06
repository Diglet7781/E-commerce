<?php

$dbu="root";
$dbp="";
$dbh="localhost";
$dbname="ecommerce";

$connect= new mysqli($dbh,$dbu,$dbp,$dbname);
if($connect->connect_error){
    die("connection failed :".$connect->connect_error);
}else{
    echo "connect sucessful";
}

?>