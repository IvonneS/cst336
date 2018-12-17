<?php
include '../inc/dbConnection.php';
$dbConn = startConnection("c9");

$value = $_GET['username'];

   global $dbConn;
    $sql = "SELECT * FROM `fe_login` WHERE 1";


if($value == "jdoe"){
    $days = 0;
    $sql .= "WHERE studentId = 11";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
    foreach ($records as $record){ 
         echo $record['daysLeftPwdChange'];
    }
    // if($days < 16 && $days > 0 ){//is lower than 16 but higher than 0
    //     return "You have" . $days ."days to change your password";
    // }
    // if($days == 0 ){//is lower than 16 but higher than 0
    //     return "You must change your password NOW";
    // }
}
if($value == "bdeer"){
    $sql .= "WHERE studentId = 12";
}
if($value == "jlopez"){
    $sql .= "WHERE studentId = 13";
}
if($value == "mgriffin"){
    $sql .= "WHERE studentId = 14";
}
if($value == "bob"){
   $sql .= "WHERE studentId = 15";
}
if($value == "sue"){
    $sql .= "WHERE studentId = 16";
}




?>