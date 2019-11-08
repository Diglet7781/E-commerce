<?php

//validate the input
function validate($firstName,$lastName,$email,$accountType,$username,$password,$confirmPassword){
    if($firstName=="" || $lastName=="" || $email=="" || $accountType=="" || $password=="" || $confirmPassword==""){
        echo "All Fields must be entered";
    }
}

//prevvents sql injection
/*
function cleanVar($variableToClean, $connectionToSQL) {
    return mysqli_real_escape_string($connectionToSQL, $variableToClean);
}
*/

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

 function createConn() { 
    $dbu="root"; $dbp=""; $dbh="localhost"; $dbname="ecommerce";
    return new mysqli($dbh,$dbu,$dbp,$dbname);

    //$connect = createConn();
}