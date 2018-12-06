<?php
include '../../inc/dbConnection.php';
$dbConn = startConnection("ottermart");

$value = $_GET['option'];

   global $dbConn;
    $sql = "UPDATE `stars` SET `value`= value + 1 ";


if($value == "1"){
    $sql .= "WHERE rateId = 1";
}
if($value == "2"){
    $sql .= "WHERE rateId = 2";
}
if($value == "3"){
    $sql .= "WHERE rateId = 3";
}
if($value == "4"){
    $sql .= "WHERE rateId = 4";
}

$stmt = $dbConn->prepare($sql);
    $stmt->execute();
    // $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // echo $records;
    
    display();
    function display(){
     global $dbConn;
    $sql = "SELECT * FROM `stars` WHERE 1";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo $records;
    // foreach ($records as $record) {
    //     echo  $record['value'];
    // }
}

?>