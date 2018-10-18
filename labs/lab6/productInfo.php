<?php
include '../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

function displayProductInfo(){
    global $dbConn;
    
    $productId = $_GET['productId'];
    $sql = "SELECT * 
            FROM om_product 
            NATURAL LEFT JOIN om_purchase 
            WHERE productId = $productId";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<img src = " . $records[0]['productImage']."'>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Quantity</th><th>Init Price</th><th>Purchase Day</th>";//title in table 
    
    foreach($records as $record){
        echo "<tr>";
        echo "<td>" . $record[quantity]. "</td>";
        echo "<td>" . $record[unitPrice]. "</td>";
        echo "<td>" . $record[purchaseDay]. "</td>";
        echo "</tr>";
    }
    echo "</tr>";
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Product Purchase History </title>
    </head>
    <body>
            <h2>Product Purchase History </h2>
            
            <?=displayCategories()?>
    </body>
</html>


<!-- Class notes:
in line 12 we did not use single quotes because an integer, other wise it should use it-->