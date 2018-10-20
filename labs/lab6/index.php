<?php

include "../../inc/dbConnection.php";
$dbConn = startConnection();

function displayCategories(){
    global $dbConn; 
    $sql = "SELECT * FROM om_category ORDER BY catName " ;
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll();//this only return all records
    //fetch();this only return one record
    //print_r($records);
    //echo "<hr>";
    //echo $records[2] . "<br>";
    //echo $records[1]['catDescription'] . "<br>";
    foreach($records as $record){
        echo "<option value=".$record['catId'].">" . $record['catName']  . "</option>" . "<br>";
    }
}

function filterProducts(){
    global $dbConn;
    
     $namedParameters = array();
    $product = $_GET['productName'];
    
    
    $sql = "SELECT * FROM om_product WHERE 1";
    
    if(!empty($product)){
        //This sql prevents sql injection 
        $sql .= " AND productName LIKE :product";
         $namedParameters[':product'] = "%$products%";
    }
    if(!empty($_GET['category'])){
        //This sql prevents sql injection 
        $sql .= " AND catId = :category";
        $namedParameters[':category'] = $_GET['category'];
    }

    if(isset($_GET['orderBy'])){
        
        if($_GET['orderBy'] == "productPrice"){
            $sql .= "ORDER BY price";
        }else{
            $sql .= " ORDER BY productName";
        }
        
    }
   
   
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);//error
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);  
    //print_r($records);
    foreach ($records as $record){
        echo "<a href = 'productInfo.php?productId=".$record['productId']."'>";
        echo $record['productName'];
        echo "</a>";
        echo  $record['productDescription'] . " $" . $record['price'] ."<br/>";
    }

    
}



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 6: Otter Product Search </title>
          <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <h1> OTTERMART</h1>
        <div id= "logo">
        <img src="../../img/csumb.png" alt = "csumb logo"/>
        </div>
        <hr width="80%"/>
        <h2> Product Search</h2>
        
        <form>
           <form>
            
            Product: <input type="text" name="productName" placeholder="Product keyword" /> <br />
            
            Category: 
            <select name="category">
                <option value=""> Select one </option> 
                
               <?=displayCategories()?>
            </select>
            Price: From: <input type="text" name="priceFrom"  /> 
             To: <input type="text" name="priceTo"  />
            <br>
            Order By:
            Price <input type="radio" name="orderBy" value="productPrice">
            Name <input type="radio" name="orderBy" value="productName">
            <br>
            
            
            <input type="submit" name="submit" value="Search!"/>
        </form>
        
        
        <?= filterProducts() ?>
    </body>
</html>

<!--Notes:
Copy 3rd slide from powerpoint to connect database
-->