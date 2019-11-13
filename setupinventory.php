<?php
  require_once "dblogin.php";
  $connect = createConn();
  $query = "CREATE TABLE inventory (
  productid INT NOT NULL AUTO_INCREMENT,
  productType VARCHAR(20),
  productName VARCHAR(250),
  productDescription VARCHAR(250),
  quantity int(11),
  price float(10),
  picture blob,
  sellerid int(11),
  PRIMARY KEY (productid))";
  
  $result = $connect->query($query);
  if (!$result){
      die($connect->error);
  }
  else
      echo "Table build successful.";
?>