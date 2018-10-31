<?php

include '../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

function displayCategories() { 
    global $dbConn;
    
    $sql = "SELECT * FROM om_category ORDER BY catName";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
    
    foreach ($records as $record) {
        echo "<option value='".$record['catId']."'>" . $record['catName'] . "</option>";
    }
}

function displaySearchResults() {
    global $dbConn;

    
    $namedParameters= array();
    $product = $_GET['productName'];
    $from = $_GET['priceFrom'];
    $to = $_GET['priceTo'];
    $sql= "SELECT * FROM om_product WHERE 1";
    
    
   
   if (!empty($product)){
        
         $sql .=  " AND productDescription LIKE '%$product%' OR productName LIKE '%$product%' ";
         $namedParameters[':product'] = "%$product%";
    }
    
    if (!empty($_GET['category'])){
        //This SQL prevents SQL INJECTION by using a named parameter
         $sql .=  " AND catId =  :category";
         $namedParameters[':category'] = $_GET['category'] ;
    }
    if(!empty($from) && !empty($to)){
       
        $sql .=  "WHERE price > '$from' AND price < '$to'";
        $namedParameters[':price'] = $_GET['priceFrom'];
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
    

    }else{
    echo "<div id= 'error'>";
    echo "Please select order";
    echo "</div>";
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
            <br>
            Category: 
            <select name="category">
               <option value=""> Select one </option>  
               <?=displayCategories()?>
            </select>
            <br><br>
            Price: From: <input type="text" name="priceFrom" size="5"/> 
             To: <input type="text" name="priceTo" size="5"/>
            <br><br>
            Order By:
            Price <input type="radio" name="orderBy" value="productPrice" >
            Name <input type="radio" name="orderBy" value="productName">
            <br><br>
            <input type="submit" name="searchForm" value="Search" id="b1"/>
        </form>
        <br>
        <hr>
        
        <?=displaySearchResults()?>
        
    


    </body>
</html>
<!--
Things to implement:
When trying to search by name or description no products show. 
To filter by category a price or name button must be selected,
items do not show up without them.

-->