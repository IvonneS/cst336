<?php
include 'functions.php';


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
        
    </style>
    <body>
        <h1>Welcome!</h1>
        <form>
            <b> Product Name: </b><input type="text" name="product_name" placeholder="product" /> <br />
            <br>
            <b> Brand:</b> 
            <select name="brand">
               <option value=""> Select Brand </option>
               <?php displayBrand(); ?>
            </select>
            <br><br>
            <b>Price:  From: </b> <input type="number" name="priceFrom" size="6"/> 
            <b> To: </b> <input type="number" name="priceTo" size="6" />
            <br>
            <b>Low to High Price</b> <input  type="radio"  name="orderBy" value="LToH"><br>
            <b>High to Low Price</b><input   type="radio"   name="orderBy" value="HToL">
            <br>
            <br>
            <input type="submit" name="searchForm" value="Search" id="b1" /><br>
            
          
        </form>
                
    </body>
</html>