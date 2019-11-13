<?php
  require_once "dblogin.php";
  $query = "CREATE TABLE inventory (
  productid INT NOT NULL AUTO_INCREMENT,
  productType VARCHAR(20),
  productName VARCHAR(250),
  productDescription VARCHAR(250),
  quantity int(11),
  price float,
  picture blob,
  sellerid int(11)
  PRIMARY KEY (productid))";

  $result = $connect->query($query);
  if (!$result){
      die($conn->error);
  }
  else
      echo "Table build successful.";

?>