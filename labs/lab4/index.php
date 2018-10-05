<!--
Lab#4 
Dates; 
from 9/26/2018 to 10/6/2018
-->

<?php

include "api/pixabayAPI.php";
//print_r($_GET);//print is used to display the values in the array
$backgroundImage = "img/sea.jpg";

//if(isset($_GET["keyword"])){
  //  include "api/pixabayAPI.php";
  $keyword =  $_GET['keyword'];
    //echo "you searched for: $keyword";
    //echo "Layout: " . $_GET["layout"];
    
    $imagesURLs = getImagesURLs($keyword);//, $_GET["layout"]);
    print_r($imagesURLs);
    //$backgroundImage = $imagesURLs[array_rand($imagesURLs)];
//}


?>

<!DOCTYPE html>
<html>
    <head>
        
        <title> Lab 4: Pixabay Slideshow</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
          <link rel="stylesheet" href="css/styles.css" type="text/css" />
       <style>
           body{
                background-image: url(<?=$backgroundImage?>);
                background: cover;
           }
       </style>
    </head>
    <body>
        
      <form method="GET">
            
            <input type="text" name="keyword" size="15" placeholder="Keyword"/>
            <input type="radio" name="layout" value="horizontal"> Horizontal
            <input type="radio" name="layout" value="vertical"> Vertical
            
            <input type="submit" name="submitBtn" value="Submit!!" />
            
        </form>

        <!--<h1>You must type a keyword or select a category</h1>-->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <?php
              for ($i=1; $i < 5; $i++) { 
                echo "<li data-target='#carouselExampleIndicators' data-slide-to='$i'></li>";
              }
             ?>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="<?=$imageURLs[0]?>" alt="First slide">
            </div>
            <?php
                for ($i = 1; $i < 5; $i++) {
                  echo "<div class=\"carousel-item\">";
                  if($i == 0){
                      echo "active";
                  }
                  echo "<img class=\"d-block w-100\" src=\"".$imageURLs[$i]."\" alt=\"Second slide\">";
                  echo "</div>";
                }
            ?>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </body>
</html>

<!--NOTES:
Get method is show it in the url of the page
to modify the url directely-->

<!--Post method is not showing it in the url
for: sensitive info, images, and a lot of data-->
