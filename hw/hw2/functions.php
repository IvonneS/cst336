<!--Need array for images-->
<!--display function-->
<!--random function-->

<!--1.Must include at least two loops-->
<!--3.CSS 15-->
<!--5.at least two images-->
<!--7.Uses at least three array functions-->

<?php
     
    //  6 at least one array
     $rock = array("acdc","iron","led","metallica","pantera");
     $pop = array("p1","p2","p3","p4","p5");
     $jazz = array("pic1","pic2","pic3","pic4","pic5");
     $cowboy = array("calibre","carnaval","jaguar","ms","recodo");
     
    //2. At least two condition
    if(isset($_POST['icon1'])){
        $e = "rock";
        display($rock,$e);
    }
    if(isset($_POST['icon2'])){
         $e = "cowboy";
        display($cowboy,$e);
    }
    if(isset($_POST['icon3'])){
         $e = "jazz";
        display($jazz,$e);
    }
    if(isset($_POST['icon4'])){
         $e = "pop";
        display($pop,$e);
    }
   
     
    function display($arr, $ext) {
    // 4.rand function
    $randomNumber = rand(0, (count($arr) - 1));

    $image= $arr[$randomNumber];
    
     echo '<div class="column">';
     echo "<img src=\"img/rock/$image.jpg\" alt='$image'  width= '200px'/>";
     echo '</div>';
   
    }
  

?>
    
