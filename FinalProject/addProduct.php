<?php
session_start();
include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");


if (isset($_GET['addProduct'])) { //checks whether the form was submitted
    
    
    $productName = $_GET['product_Name'];
    $description =  $_GET['product_Description'];
    $price =  $_GET['product_Price'];
    $brandId =  $_GET['category_Id'];
    $image = $_GET['product_Image'];
  
    
    $sql = "INSERT INTO product (product_Name, product_Description, product_Image, product_Price, category_Id) 
            VALUES (:product_Name, :product_Description, :product_Image, :product_Price, :category_Id);";
   $np = array();
    $np[":product_Name"] = $_GET['product_Name'];
    $np[":product_Description"] = $_GET['product_Description'];
    $np[":product_Price"] = $_GET['product_Price'];
    $np[":category_Id"] = $_GET['category_Id'];
    $np[":product_Image"] = $_GET['product_Image'];
    
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    echo "New Product was added!";
    
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
?>



<!DOCTYPE html>
<html>
    <head>
        <title> Admin Section: Add New Product </title>
    </head>
    <style>
        body{
            background-image: url("img/pic1.jpg");
            text-align:center;
            font-size: 20px;
        }
    </style>
    <body>
        
        <h1> Adding New Product </h1>
        
        <form>
           <b>Product name:</b> <input type="text" name="product_Name"><br>
           <b>Description:</b><br>
           <textarea name="product_Description" cols="25" rows="4"></textarea><br><br>
           <b>Price:</b> <input type="text" name="product_Price"><br><br>
           <b>Brand:</b> 
           <select name=" category_Id">
              <option value="">Select One</option>
              <?php
              displayBrand()
              ?>
           </select> <br><br>
           <b>Set Image Url:</b> <input type="text" name="product_Image"><br><br>
           <input type="submit" name="addProduct" value="Add Product" id="b1"><br><br>
           
            <button formaction="admin.php">Go Back</button>

        </form>

    </body>
</html>