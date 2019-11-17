<!DOCTYPE html>


<html lang = "en">
<head>

	<title>inventory</title>
	<style>
		td{
		border: 1px solid;
		text-align: center;
		padding: 0.5em;
		}
	</style>
</head>

<body>
	<h1>Inventory</h1>
<?php 
	
    require_once "dblogin.php";
    
    $connect = createConn();
   $sqlBooks= "SELECT * FROM inventory WHERE productType='book'";
   $sqlApparels="SELECT * FROM inventory WHERE productType='apparel'";
   $reasult1=$connect->query($sqlApparels);
   $reasult = $connect->query($sqlBooks);
   echo"Books Inventory";
    echo"<table>";
    echo "<tr>";
        echo    "<th>Product ID</th>";
        echo    "<th>Product Type</th>";
        echo    "<th>Product Name</th>";
        echo    "<th>Product Description</th>";
        echo    "<th>quantity</th>";
        echo    "<th>price per item</th>";
        echo    "<th>pictures</th>";
        echo    "<th>seller ID</th>";
    echo"</tr>";
   	while($row = $reasult->fetch_assoc()){
           $productid=$row["productid"];
           
   		echo   "<tr>";
            echo    "<td>" . $row["productid"]. "</td>";
            echo    "<td>" . $row["productType"].  "</td>";
            echo    "<td>" . $row["productName"]. "</td>";
            echo    "<td>" . $row["productDescription"]. "</td>";
            echo    "<td>" . $row["quantity"]. "</td>"; 
            echo    "<td>" . $row["price"]. "</td>";
            echo    "<td>";
            echo "<img src='" . $row['picture'] . "'>";
            echo "</td>";
            echo    "<td>" . $row["sellerid"]. "</td>";
            echo '<td><a href="editInventory.php?id='.$productid.'">Update</a></td>';
            echo '<td><a href="deleteItem.php?id='.$productid.'">Delete</a></td>';
        echo "</tr>";
       }
       echo"</table";
       echo"Apparel table";
       echo"<table>";
       echo "<tr>";
       echo    "<th>Product ID</th>";
       echo    "<th>Product Type</th>";
       echo    "<th>Product Name</th>";
       echo    "<th>Product Description</th>";
       echo    "<th>quantity</th>";
       echo    "<th>price per item</th>";
       echo    "<th>pictures</th>";
       echo    "<th>seller ID</th>";
   echo"</tr>";
      while($row = $reasult1->fetch_assoc()){
        $productid=$row["productid"];
          
          echo   "<tr>";
           echo    "<td>" . $row["productid"]. "</td>";
           echo    "<td>" . $row["productType"].  "</td>";
           echo    "<td>" . $row["productName"]. "</td>";
           echo    "<td>" . $row["productDescription"]. "</td>";
           echo    "<td>" . $row["quantity"]. "</td>"; 
           echo    "<td>" . $row["price"]. "</td>";
           echo    "<td>";
           echo "<img src='" . $row['picture'] . "'>";
           echo "</td>";
           echo    "<td>" . $row["sellerid"]. "</td>";
           echo '<td><a href="editInventory.php?id='.$productid.'">Update</a></td>';
           echo '<td><a href="deleteItem.php?id='.$productid.'">Delete</a></td>'; 
       echo "</tr>";
      }
       echo"</table>";
   $connect->close();
   ?>
</table>
</body>
</html>