<?php
session_start();
include '../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

function displayAllProducts(){
    //use om_products
    global $dbConn;
    $sql = "SELECT * FROM om_product
                ORDER BY productName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);

    foreach ($records as $record){
        
        echo $record['productName']. " " . "<br>";
    }       

}
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Admin Main Page </title>
    </head>
    <body>
            <h1> ADMIN SECTION - OTTERMART</h1>
            <h3>Welcome <?= $_SESSION['adminFullName'] ?></h3>
            
            <!--Display all the products -->
            <?= displayAllProducts()?>
    </body>
</html>