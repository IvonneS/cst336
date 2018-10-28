<?php

include '../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

function displayCategories() { 
    global $dbConn;
    
    $sql = "SELECT * FROM om_category ORDER BY catName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //print_r($records);
    //echo "<hr>";
    //echo $records[2] . "<br>";
    //echo $records[1]['catDescription'] . "<br>";
    
    foreach ($records as $record) {
        echo "<option value='".$record['catId']."'>" . $record['catName'] . "</option>";
    }
}

function displaySearchResults() {
    global $dbConn;

    
    $namedParameters= array();
    $product = $_GET['productName'];
    $sql= "SELECT * FROM om_product WHERE 1";
    
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
    if (isset($_GET['orderBy'])) {
        
        if ($_GET['orderBy'] == "productPrice") {
            
            $sql .= " ORDER BY price";
        } else {
            
              $sql .= " ORDER BY productName";
        }
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);        
    
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
        <img src="../../img/csumb.png" alt = "csumb logo"/>
        <title> Lab 6: Ottermart Product Search</title>
          <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <h1> Ottermart </h1>
        <h2> Product Search </h2>
        
        <form>
            
            Product: <input type="text" name="productName" placeholder="Product keyword" /> <br />
            
            Category: 
            <select name="category">
               <option value=""> Select one </option>  
               <?=displayCategories()?>
            </select>
            
            Price: From: <input type="text" name="priceFrom" size="5"/> 
             To: <input type="text" name="priceTo" size="5"/>
            <br>
            Order By:
            Price <input type="radio" name="orderBy" value="productPrice" >
            Name <input type="radio" name="orderBy" value="productName">
            <br>
            <input type="submit" name="searchForm" value="Search" id="b1"/>
        </form>
        <br>
        <hr>
        
        <?=displaySearchResults()?>
        
    


    </body>
</html>
<!--
Things to implement:
1.error messahge when using both; text area and select
2.css style
3.showing nothing when start

-->