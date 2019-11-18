<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>search</title>
</head>
<body>
    <form method="post"  action="search.php">
    <input name="search" type="text">
    <input type="submit" name="searchbtn" value="search">
    </form>
    <?php
    require_once "./functions/validate.php";
    require_once "dblogin.php";

if(isset($_POST['searchbtn'])){
    $search=test_input($_POST['search']);

    $query="SELECT * FROM inventory WHERE productName LIKE '%".$search."%' or productDescription LIKE '%".$search."%'";
    $connect=createConn();
    $result=$connect->query($query);
    if($result)
    {
        while($row=$result->fetch_assoc()){
            echo "<br>";
            echo $row["productName"];
            echo "<br>";
            //echo $row["productDescription"];
            //echo $row['price'];
            $image=$row['picture'];
            echo "<img style='height:50px;' src='".$image."'".">";
            echo "<br>";
            echo $row['price'];
            echo "<br>";
            }
    }else{
        echo "error";
    }

}
?>
</body>
</html>