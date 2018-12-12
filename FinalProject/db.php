<?php
include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");

$value = $_GET['category'];

       global $dbConn;
       
        $sql = "SELECT * FROM `report`  ";


        if($value == "MAKE UP FOREVER"){
            $sql .= "WHERE brand_id = 1";
        }
        if($value == "TOO FACED"){
            $sql .= "WHERE brand_id = 2";
        }
        if($value == "NYX"){
            $sql .= "WHERE brand_id = 3";
        }
        if($value == "MAYBELLINE"){
            $sql .= "WHERE brand_id = 4";
        }
        if($value == "ELF"){
            $sql .= "WHERE brand_id = 5";
        }

    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    
    
?>