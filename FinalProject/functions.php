<?php
include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");

function validateSession(){
    
}



function displayBrand(){
    global $dbConn;
    $sql = "SELECT DISTINCT(branch) FROM `product` WHERE 1";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='" .$record['branch']. "'";
        
        if($_GET['genre'] == $record['branch']){
            echo "selected = 'selected'";
        }
        echo ">" .$record['branch']. "</option><br />";
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