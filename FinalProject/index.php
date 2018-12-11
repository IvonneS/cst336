<?php
include "functions.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Page</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
                
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">EASY MAKEUP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log In</a></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="howTo.html">How-To ??</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dupes.php">Dupes</a>
          </li>
          
        </ul>
      </div>
    </nav>
    </head>
    <style>
        #productList{
          text-align: left;
          margin-right: 300px;
	        margin-left: 300px;
	        font-family: serif;
        }
        #body1{
           margin-left: 150px;
        }
        h1{
          text-align: center;
           font-family: serif;
        }
        footer{
          text-align: center;
          font-size: 11px;
        }
        #b1{
         
          border-radius: 15px;
          text-align: center;
          
        }
    </style>
    <body>
        <h1>Welcome!</h1>
        <form id = "body1">
            <b> Product Name: </b><input type="text" name="product_name" placeholder="product" value = '<?php echo $_GET["product_name"] ?>' /> <br />
            <br>
            <b> Brand:</b> 
            <select name="brand">
               <option value=""> Select Brand </option>
               <?php displayBrand(); ?>
            </select>
            <br> <br>
            <b>Price:  From: </b> <input type="number" name="priceFrom" size="6"  <?php echo $_GET["priceFrom"] ?>/> 
            <b> To: </b> <input type="number" name="priceTo" size="6" <?php echo $_GET["priceTo"] ?>/>
            <br>
            <input  type="radio"  name="orderBy" value="LToH" <?php echo ($_GET['orderBy'] == 'LToH') ? 'checked="checked"' : ''; ?>>   Low to High Price  
            <input   type="radio"   name="orderBy" value="HToL" <?php echo ($_GET['orderBy'] == 'HToL') ? 'checked="checked"' : ''; ?>>   High to Low Price 
            <input type="radio" name="orderBy" value="alphabetic" <?php echo ($_GET['orderBy'] == 'alphabetic') ? 'checked="checked"' : ''; ?>>   Alphabetical Order  
            <br>
            <br>
            <input type="submit" name="searchForm" value="Search" id="b1" /><br>
            <br><br>
        </form>
           <div id="productList">
                <?php
                displayProduct();
                ?>
            </div>
    </body>
    <div class="hr"><hr /></div>
    <footer> <!--Add image backgroud-->
       <i><b>About: </b>
      <p>
                    Easy search for different brand for different needs. <br>
                    Contained tutorials and tips for newbies in the world of makeup. 
      </p></i>
    </footer>
</html>