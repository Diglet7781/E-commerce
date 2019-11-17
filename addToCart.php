<?php
require_once "dblogin.php";
session_start();
$id=$_SESSION['id'];
echo"your id is $id";
?>