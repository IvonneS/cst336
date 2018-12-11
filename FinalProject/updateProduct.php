<?php
session_start();
include "functions.php";

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
            <input type="hidden" name="productId" value="<?=$productInfo['productId']?>">
           <b>Product name:</b> <input type="text" name="productName" value="<?=$productInfo['productName']?>"><br><br>
           <b>Description:</b></b> <textarea name="description" cols="50" rows="4"> <?=$productInfo['productDescription']?> </textarea><br>
           <b>Price:</b> <input type="text" name="price" value="<?=$productInfo['price']?>"><br>
           <b>Category:</b> 
           <select name="catId">
              <option value="">Select One</option>
              <?php
              
            //   $categories = getCategories();
              
            //   foreach ($categories as $category) {
                  
            //       echo "<option  "; 
            //       echo  ($category['catId']==$productInfo['catId'])?"selected":"";
            //       echo " value='".$category['catId']."'>" . $category['catName'] . "</option>";
                  
             // }
              
              ?>
           </select> <br />
           <b>Set Image Url:</b> <input type="text" name="productImage" value="<?=$productInfo['productImage']?>"><br>
           <input type="submit" name="updateProduct" value="Update Product" id="b1" size = "10"><br><br>
                       
            <button formaction="admin.php">Go Back</button>

        </form>
        
        
    </body>
</html>