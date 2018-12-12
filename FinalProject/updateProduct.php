<?php
session_start();
include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");

if (isset($_GET['updateProduct'])){  //user has submitted update form
    
    $np = array();
    $np[":product_Name"] = $_GET['product_Name'];
    $np[":product_Description"] = $_GET['product_Description'];
    $np[":product_Price"] = $_GET['product_Price'];
    $np[":product_Image"] = $_GET['product_Image'];
    
    $sql = "UPDATE product 
            SET product_Name= :product_Name,
               product_Description = :product_Description,
               product_Price = :product_Price,
               product_Image = :product_Image
            WHERE product_Id = " . $_GET['product_Id'];
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);       
    
}


if (isset($_GET['product_Id'])) {

  $productInfo = getProductInfo($_GET['product_Id']);    

    
}
function getProductInfo($productId) {
     global $dbConn;
    
    $sql = "SELECT * FROM product WHERE product_Id = $productId";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting multiple records   
    
    return $record;
     
    
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Update Products </title>
        </head>
        <style>
             body{
            background-image: url("img/pic1.jpg");
            text-align:center;
            font-size: 20px;
        }
        </style>
    <body>

        <h1> Updating A Product </h1>
        
        <form>
            <input type="hidden" name="product_Id" value="<?=$productInfo['product_Id']?>">
           <b>Product name:</b> <input type="text" name="product_Name" value="<?=$productInfo['product_Name']?>"><br><br>
           <b>Description:</b></b> <textarea name="product_Description" cols="50" rows="4"> <?=$productInfo['product_Description']?> </textarea><br>
           <b>Price:</b> <input type="text" name="product_Price" value="<?=$productInfo['product_Price']?>"><br><br>
           <b>Set Image Url:</b> <input type="text" name="product_Image" value="<?=$productInfo['product_Image']?>"><br>
           <input type="submit" name="updateProduct" value="Update Product" id="b1" size = "10"><br><br>
                       
            <button formaction="admin.php">Go Back</button>
                
        </form>
                
        
    </body>
</html>