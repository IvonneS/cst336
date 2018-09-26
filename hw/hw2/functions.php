<!--Need array for images-->
<!--display function-->
<!--random function-->

<!--1.Must include at least two loops-->
<!--3.CSS 15-->
<!--5.at least two images .. Done-->
<!--7.Uses at least three array functions
-->

<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/style.css");
        </style>
    </head>
</html>
<?php
     
    //  6 at least one array
     $rockArr = array("acdc","iron","led","metallica","pantera");
     $popArr = array("p1","p2","p3","p4","p5");
     $jazzArr = array("pic1","pic2","pic3","pic4","pic5");
     $cowboyArr = array("calibre","carnaval","jaguar","ms","recodo");
     
    //2. At least two condition
    if(isset($_POST['icon1'])){
        // 4.rand function
        //one array function called count
        $randomNumber = rand(0, (count($rockArr) - 1));

        $image= $rockArr[$randomNumber];
    
     echo '<div class="column2">';
     echo "<img src=\"img/$image.jpg\" alt='$image'  width= '200px'/>";
     echo '</div>';
    }
    if(isset($_POST['icon2'])){
        $randomNumber = rand(0, (count($cowboyArr) - 1));

    $image= $cowboyArr[$randomNumber];
    
     echo '<div class="column2">';
     echo "<img src=\"img/$image.jpg\" alt='$image'  width= '200px'/>";
     echo '</div>';
    }
    if(isset($_POST['icon3'])){
        $randomNumber = rand(0, (count($jazzArr) - 1));

    $image= $jazzArr[$randomNumber];
    
     echo '<div class="column2">';
     echo "<img src=\"img/$image.jpg\" alt='$image'  width= '200px'/>";
     echo '</div>';
    }
    if(isset($_POST['icon4'])){
        $randomNumber = rand(0, (count($popArr) - 1));

    $image= $popArr[$randomNumber];
    
     echo '<div class="column2">';
     echo "<img src=\"img/$image.jpg\" alt='$image'  width= '200px'/>";
     echo '</div>';
    }
   
    if(isset($_POST['list'])){
        
    
        sort($rockArr);
        
        for($x=0;$x<count($rockArr);$x++)
        {
        echo "<li>$rockArr[$x]</li>";
        echo "<br>";
        }
        

    }
      if(isset($_POST['combination2'])){
        $newA = array_combine($popArr,$jazzArr);
         $randomNumber = rand(0, (count($newA) - 1));
         
           $image= $newA[$randomNumber];
        echo '<div class="column2">';
        echo "<img src=\"img/$image.jpg\" alt='$image'  width= '200px'/>";
        echo '</div>';
    }
  

?>
    
