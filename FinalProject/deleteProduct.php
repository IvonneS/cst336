<?php
session_start();

include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");


$sql = "DELETE FROM product WHERE product_Id = " . $_GET['productId'];
$stmt=$dbConn->prepare($sql);
$stmt->execute();

header("Location: admin.php");



?>