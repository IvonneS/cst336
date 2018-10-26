<?php

include '../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

$text = $_GET['productName'];
$option = $_GET['category'];

function displayCategories() { 
    global $dbConn;
    global $text;
    global $option;
    
   
    $sql = "SELECT * FROM om_category ORDER BY catName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='".$record['catId']."'>" . $record['catName'] . "</option>";
    }
    
}

function filterProducts() {
    global $dbConn;
    
    $namedParameters = array();
    $product = $_GET['productName'];
    //$sql = "SELECT * FROM om_product WHERE 1"; //Gettting all records from database
    
    if(empty($text)){
            echo "<div id='error'>";
            echo "<b>" . "Please select one option" . "</b>";
            echo "</div>";
        }else{
        $sql = "SELECT * FROM om_product WHERE 1"; //Gettting all records from database
    
        if (!empty($product)){
        //This SQL prevents SQL INJECTION by using a named parameter
         $sql .=  " AND productName LIKE :product";
         $namedParameters[':product'] = "%$product%";
        }
    
        if (!empty($_GET['category'])){
        //This SQL prevents SQL INJECTION by using a named parameter
         $sql .=  " AND catId =  :category";
          $namedParameters[':category'] = $_GET['category'] ;
        }
    
        //echo $sql;
    
        if (isset($_GET['orderBy'])) {
        
            if ($_GET['orderBy'] == "productPrice") {
                
                $sql .= " ORDER BY price";
            } else {
            
                  $sql .= " ORDER BY productName";
            }
        }

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);  
    //print_r($records);
    
    
    foreach ($records as $record) {
        
        echo "<a href='productInfo.php?productId=".$record['productId']."'>";
        echo $record['productName'];
        echo "</a> ";
        echo $record['productDescription'] . " $" .  $record['price'] .   "<br>";   
        
    }

   }
 }
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/style.css");
        </style>
        <title> Lab 6: Ottermart Product Search</title>
    </head>
    <body>
        <img src="../../img/csumb.png" alt = "csumb logo"/>
        <h1> OTTERMART </h1>
        <h2> Product Search </h2>
        
        <form method="GET">
            
            Product: <input type="text" name="productName" placeholder="Product keyword" /> <br />
            <br>
            Category: 
            <select name="category">
               <option value=""> Select one </option>  
               <?=displayCategories()?>
            </select>
            
            Price: From: <input type="text" name="priceFrom" size="10"/> 
             To: <input type="text" name="priceTo" size="10" />
            <br><br>
            Order By:
            Price <input type="radio" name="orderBy" value="productPrice">
            Name <input type="radio" name="orderBy" value="productName">
            <br><br>
            <input type="submit" name="submit" id = "b1" value="Search!"/>
        </form>
        <br>
        <hr>
        
        <?= filterProducts() ?>
        
    </body>
</html>

<!--
Things to implement:
1.error messahge when using both; text area and select
2.css style
3.showing nothing when start

-->