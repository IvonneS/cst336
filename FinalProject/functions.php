<?php
include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");

function validateSession(){
    
}
function displayProduct(){
     global $dbConn;

        if(isset($_GET['searchForm'])){
            
                $sql = "SELECT * FROM product WHERE 1"; 
                
                //Text Area
                if(!empty($_GET[''])){
                    $sql .= " AND product_Name OR product_Description LIKE :product_name";
                    $namedParameters[':product_name'] = "%" .$_GET['product_name']. "%";
                }
                
                if(!empty($_GET['brand'])){
                    $sql .= " AND branch = :brand"; 
                    $namedParameters[':brand'] = $_GET['brand'];
                }
                
                if(!empty($_GET['priceFrom']) && !empty($_GET['priceTo'])){
                    $sql .= " AND product_Price >= :priceFrom"; 
                    $sql .= " AND product_Price <= :priceTo"; 
                    $namedParameters[':priceFrom'] = $_GET['priceFrom'];
                    $namedParameters[':priceTo'] = $_GET['priceTo'];
                }
                
                if(isset($_GET['orderBy'])){
                    if($_GET['orderBy'] == 'alphabetic'){
                        $sql .= " ORDER BY product_Name ASC"; 
                    }
                    elseif($_GET['orderBy'] == 'LToH') {
                        $sql .= " ORDER BY product_Price ASC"; 
                    }
                    elseif($_GET['orderBy'] == 'HToL'){
                        $sql .= " ORDER BY product_Price DESC";
                    }
                    }
                
                            $stmt = $dbConn->prepare($sql);
                            $stmt->execute($namedParameters);
                            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    
        
                    
                     foreach ($records as $record) {
                         
                    
                    echo "Name: ". $record['product_Name'] . "<br>";
                    echo "Brand:". $record['branch'] . "<br>";
                     echo  "Description: " . $record['product_Description'] . "<br>";
                     echo " Price: $" . $record['product_Price'] .   "<br>";
                     echo "<img src = '". $record['product_Image'] . "' width='100' height='125' alt = 'image'><br><br> ";
                       
                     }//end forloop
        }
                    
}//function ends

function displayBrand(){
    global $dbConn;
    $sql = "SELECT DISTINCT(branch) FROM `product` WHERE 1";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='" .$record['branch']. "'";
        
        if($_GET['brand'] == $record['branch']){
            echo "selected = 'selected'";
        }
        echo ">" .$record['branch']. "</option><br />";
        $record . "<br>";
    }
}
function displayCate(){
    global $dbConn;
    $sql = "SELECT DISTINCT(category_Name) FROM `category` WHERE 1";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='" .$record['category_Name']. "'";
        
        if($_GET['cate'] == $record['category_Name']){
            echo "selected = 'selected'";
        }
        echo ">" .$record['category_Name']. "</option><br />";
        $record . "<br>";
    }
}

function displayEye(){
    global $dbConn;
    $sql = "SELECT * FROM `category` WHERE category_Id = 1 OR category_Id = 4 OR category_Id = 5 OR category_Id = 13";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='" .$record['category_Name']. "'";
        
        if($_GET['genre'] == $record['category_Name']){
            echo "selected = 'selected'";
        }
        echo ">" .$record['category_Name']. "</option><br />";
        $record . "<br>";
    }
}
function displayFace(){
    global $dbConn;
    $sql = "SELECT * FROM `category` WHERE category_Id = 2 OR category_Id = 7 OR category_Id = 8 OR category_Id = 10
    OR category_Id = 11 OR category_Id = 12 OR category_Id = 14";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='" .$record['category_Name']. "'";
        
        if($_GET['genre'] == $record['category_Name']){
            echo "selected = 'selected'";
        }
        echo ">" .$record['category_Name']. "</option><br />";
        $record . "<br>";
    }
}
function displayLips(){
    global $dbConn;
    $sql = "SELECT * FROM `category` WHERE category_Id = 3 OR category_Id = 9 OR category_Id = 15 OR category_Id = 6";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='" .$record['category_Name']. "'";
        
        if($_GET['genre'] == $record['category_Name']){
            echo "selected = 'selected'";
        }
        echo ">" .$record['category_Name']. "</option><br />";
        $record . "<br>";
    }
}
?>