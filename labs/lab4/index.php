<!--
Lab#4 
Dates: from 9/26/2018 to 10/6/2018
-->

<?php

include "api/pixabayAPI.php";
//print_r($_GET);//print is used to display the values in the array


if(isset($_GET["keyword"])){

  $keyword =  $_GET['keyword'];
   //echo $keyword;
   if(!empty($_GET['selectOne'])){
     $keyword = $_GET['selectOne'];
   }
    $imageURLs = getImageURLs($keyword, $_GET["layout"]);
   // print_r($imageURLs);
    shuffle($imageURLs);
    $backgroundImage = $imageURLs[array_rand($imageURLs)];
}
//$backgroundImage = "img/sea.jpg";
//$backgroundImage = $imagesURLs[array_rand($imagesURLs)];

?>

<!DOCTYPE html>
<html>
    <head>
          
        <title> Lab 4: Pixabay Slideshow</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
        
       <style>
             @import url("css/styles.css");
           body{
                background-image: url(<?=$backgroundImage?>);
                background-size: cover;
           }
           
       </style>
    </head>
    <body>
        <br/><br/>
      <form method="GET">
            <div id = "second_div">
            <input type="text" name="keyword" size="15" placeholder="Keyword"/>
            <input type="radio" name="layout" value="horizontal"> <b>Horizontal </b>
            <input type="radio" name="layout" value="vertical"> <b>Vertical</b>
            </div>
            <div>
              <br/>
              <select name = "select">
              <option value = "selectOne">- Select One-</option>
              <option value = "sea">Sea</option>
              <option value = "sky">Sky</option>
              <option value = "mountains">Mountains</option>
              <option value = "forest">Forest</option>
              </select>
              
            </div>
            <br/>
            <div id = "third_div">
              <input type="submit" name="submitBtn" value="Submit!!" />
            </div>
            <br/><br/>
            
        </form>
         
        
           <?php 
        if (isset($imageURLs)) { ?>
         
        
       
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
        <?php
        }
        
        else {
            
            echo "<br>><h1>Enter a Keyword or Select a Category!</h1>";     
             
         }
        ?>

       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
       <br/><br/>
    </body>
</html>

<!--NOTES:
Get method is show it in the url of the page
to modify the url directely-->

<!--Post method is not showing it in the url
for: sensitive info, images, and a lot of data-->
