<?php
require_once "dblogin.php";
$id = intval($_GET['id']);
    echo"this is id: $id";
    $connect = createConn();
        
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }
        echo "Connected successfully";
        $sql="DELETE FROM inventory WHERE productid='$id';

        if($connect->query($sql) === TRUE){
            echo 'item deleted sucessfully';
        }else{
            echo'Errorr deleting record: '. $connect->error;
        }

?>
