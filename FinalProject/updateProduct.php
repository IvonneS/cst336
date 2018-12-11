<?php
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
            <input type="hidden" name="product_Id" value="<?=$productInfo['product_Id']?>">
           <b>Product name:</b> <input type="text" name="product_Name" value="<?=$productInfo['product_Name']?>"><br><br>
           <b>Description:</b></b> <textarea name="product_Description" cols="50" rows="4"> <?=$productInfo['product_Description']?> </textarea><br>
           <b>Category:</b> 
           <select name="category_Id">
              <option value="">Select Brand</option>
              <?php
              
              $categorie = getCategories();
              
              foreach ($categories as $category) {
                  
                  echo "<option  "; 
                  echo  ($category['category_Id']==$productInfo['category_Id'])?"selected":"";
                  echo " value='".$category['category_Id']."'>" . $category['category_Name'] . "</option>";
                  
              }
              
              ?>
           </select> <br />
           <b>Set Image Url:</b> <input type="text" name="product_Image" value="<?=$productInfo['product_Image']?>"><br>
           <input type="submit" name="updateProduct" value="Update Product" id="b1" size = "10"><br><br>
                       
            <button formaction="admin.php">Go Back</button>
                
        </form>
                
        
    </body>
</html>