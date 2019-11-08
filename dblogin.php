<?php

$dbu="root";
$dbp="";
$dbh="localhost";
$dbname="ecommerce";
$connect= new mysqli($dbh,$dbu,$dbp,$dbname);
  if($connect->connect_error){
      die("connection failed :".$connect->connect_error);
  }



  /*
function createConn() { 
    $dbu="root"; $dbp=""; $dbh="localhost"; $dbname="ecommerce";
    return new mysqli($dbh,$dbu,$dbp,$dbname);

    //$connect = createConn();
}
 //Username field: `;DELETE * FROM * WHERE 1

*/
?>