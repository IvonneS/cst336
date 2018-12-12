<?php
include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");
function displayAll(){
    global $dbConn; 
 
    $sql = "SELECT * FROM product ORDER BY product_Name";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records
    foreach ($records as $record) {
    
                    echo "Name: ". $record['product_Name'] . "<br>";
                    echo "Brand:". $record['branch'] . "<br>";
                    echo "<img src = '". $record['product_Image'] . "' width='200' height='150' alt = 'image'><br><br> ";
                    echo " Price: $" . $record['product_Price'] .   "<br>";
                    echo  "Description: " . $record['product_Description'] . "<br>";
                    echo "<a class='btn btn-warning' role='button' href='updateProduct.php?product_Id=".$record['product_Id']."'>Update</a>";
                    echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
                    echo "   <input type='hidden' name='product_Id' value='".$record['product_Id']."'>";
                    echo "   <button class='btn btn-outline-danger' type='submit'>Delete</button><br><br>";
    }
}
function validateSession(){
    if (!isset($_SESSION[''])) {
    
    header("Location: index.php");  //redirects users who haven't logged in 
    exit;
  }
}
function displayProduct(){
     global $dbConn;
        if(isset($_GET['searchForm'])){
                
                $sql = "SELECT * FROM product WHERE 1"; 
                
                if(!empty($_GET['product_name']) && !empty($_GET['brand'])){
                    $sql .= " AND product_Name LIKE :product_name"; 
                    $sql .= " AND branch = :brand";
                    $namedParameters[':product_name'] = "%" .$_GET['product_name']. "%";
                    $namedParameters[':brand'] = $_GET['brand'];
                }
                if(!empty($_GET['product_name'])){
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
                    echo "<img src = '". $record['product_Image'] . "' width='200' height='150' alt = 'image'><br><br> ";
                    echo " Price: $" . $record['product_Price'] .   "<br>";
                     echo  "Description: " . $record['product_Description'] . "<br>";
                     }//end forloop
        }
                    
}//function ends
function update(){
    if (isset($_GET['updateProduct'])){  //user has submitted update form
    
    $np = array();
    $np[":product_Name"] = $_GET['productName'];
    $np[":product_Description"] = $_GET['product_Description'];
    $np[":product_Image"] = $image;
    $np[":product_Price"] = $_GET['product_Price'];
    $np[":category_Id"] = $_GET['category_Id'];
    
    $sql = "UPDATE om_product 
            SET product_Name= :productName,
               product_Description = :product_Description,
               product_Price = :product_Price,
               category_Id = : category_Id,
               product_Image = :productImage
            WHERE productId = " . $_GET['productId'];
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);       
    
    }
        if (isset($_GET['product_Id'])) {
        
          $productInfo = getProductInfo($_GET['product_Id']);    
        
            
        }
  }
    
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
function getCategories() {
    global $dbConn;
    
    $sql = "SELECT DISTINCT(category_Name) FROM `category` ORDER BY category_Name";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records   
    
    //print_r($records);
    
    return $records;
    
}
function getProductInfo($productId) {
     global $dbConn;
    
    $sql = "SELECT * FROM product WHERE product_Id = $productId";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting multiple records   
    
    return $record;
     
    
}
function displayCate(){
    global $dbConn;
    $sql = "SELECT category_Name FROM `category` WHERE 1";
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
function displaySum(){
    global $dbConn;
    
    $sql = "SELECT round(sum(product_Price)) avg_price FROM product ";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
     $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records
    foreach ($records as $record) {
        
        echo " $ " . $record['avg_price'] . "<br>";
        
    }
}
function displayMax(){
    global $dbConn;
    
    $sql = "SELECT max(product_Price) avg_price FROM product ";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records
    foreach ($records as $record) {
        
        echo " $ " . $record['avg_price'] . "<br>";
        
    }
}
function displayAvg(){
    global $dbConn;
    
      $sql = "SELECT round(avg(product_Price)) avg_price FROM product";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records
    foreach ($records as $record) {
        
        echo " $ " . $record['avg_price'] . "<br>";
        
    }
}
?>