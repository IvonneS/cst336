
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
           <b>Product name:</b> <input type="text" name="productName"><br>
           <b>Description:</b><br>
           <textarea name="description" cols="25" rows="4"></textarea><br><br>
           <b>Price:</b> <input type="text" name="price"><br><br>
           <b>Brand:</b> 
           <select name="brand">
              <option value="">Select One</option>
              <?php
              
            //   $categories = getCategories();
              
            //   foreach ($categories as $category) {
                  
            //       echo "<option value='".$category['catId']."'>" . $category['catName'] . "</option>";
                  
            //   }
              
              ?>
           </select> <br><br>
           <b>Set Image Url:</b> <input type="text" name="productImage"><br><br>
           <input type="submit" name="addProduct" value="Add Product" id="b1"><br><br>
           
            <button formaction="admin.php">Go Back</button>

        </form>

    </body>
</html>