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
   echo "<option>" . $record['catName']  . "</option>" . "<br>";
}

function filterProducts(){
    global $dbConn;
    $produc = $_GET['productName'];
    $sql = "SELECT * FROM om_product
            WHERE productName LIKE :product";
    
    $namedParametes = array();
    $namedParameters[':product'] = "%$products%";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);  
    print_r($records);
    
}
    
}



?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lab 6: Otter Product Search </title>
    </head>
    <body>
        
        <h1> Ottermart</h1>
        <h2> Product Search</h2>
        
        <form>
           <form>
            
            Product: <input type="text" name="productName" placeholder="Product keyword" /> <br />
            
            Category: 
            <select name="category">
               <option value=""> Select one </option>  
               <?=displayCategories()?>
            </select>
            
            <input type="submit" name="submit" value="Search!"/>
        </form>
        
        
        <?= filterProducts() ?>
    </body>
</html>

<!--Notes:
Copy 3rd slide from powerpoint to connect database
-->