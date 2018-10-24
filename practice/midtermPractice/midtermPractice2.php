<?php
include '../../inc/dbConnection.php';
$dbConn = startConnection("midterm");

function displayCities(){
    global $dbConn;
    // List all cities/towns that have a population between 50,000 and 80,000
    $sql = "SELECT * FROM `mp_town` WHERE population BETWEEN 50000 ANd 80000";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo $record['town_name'] . "   " . $record['population'] . "<br>";
    }
}
function display(){
      global $dbConn;
   
    $sql = "SELECT * FROM `mp_town` ORDER BY population DESC";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo $record['town_name'] . "   " . $record['population'] . "<br>";
    }
}
function displaythree(){
    global $dbConn;
   
    $sql = "SELECT * FROM `mp_town` ORDER BY population LIMIT 3";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo $record['town_name'] . "   " . $record['population'] . "<br>";
    }
    
}
function displayCountry(){
    global $dbConn;
    $sql = "SELECT * FROM `mp_county` WHERE county_name LIKE 'S%'";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo $record['county_name'] . "<br>";
    }
    
}



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Midterm 2</title>
    </head>
    <body>
            <?php 
             displayCities(); 
             echo "----------------------------------- " . "<br>";
             display();
             echo "----------------------------------- " . "<br>";
             displaythree();
             echo "----------------------------------- " . "<br>";
             displayCountry();
             echo "----------------------------------- " . "<br>";
              ?>
    </body>
</html>