<!--Need array for images-->
<!--display function-->
<!--random function-->

<!--5.at least two images .. Done-->
<!--7.Uses at least three array functions
*array()
*count(arrayname)
*sorth(arrayname)
*array_merge(array1,arra2)

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
     $popArr = array("michael","pink","lanaDeRey","madonna","maroon5");
     $jazzArr = array("jim","latinoBlue","sweetClifford","artpepper","johnKirby");
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
   
    if(isset($_POST['listA'])){
        
    
        sort($rockArr);
        //1.Must include at least two loops
        for($x=0;$x<count($rockArr);$x++)
        {
        echo "<li>$rockArr[$x]</li>";
        echo "<br>";
        }
    }
      if(isset($_POST['listB'])){
        
    
        sort($cowboyArr);
        //1.Must include at least two loops
        for($x=0;$x<count($cowboyArr);$x++)
        {
        echo "<li>$cowboyArr[$x]</li>";
        echo "<br>";
        }
    }
      if(isset($_POST['listC'])){
        
    
        sort($popArr);
        //1.Must include at least two loops
        for($x=0;$x<count($popArr);$x++)
        {
        echo "<li>$popArr[$x]</li>";
        echo "<br>";
        }
    }
      if(isset($_POST['listD'])){
        
    
        sort($jazzArr);
        //1.Must include at least two loops
        for($x=0;$x<count($jazzArr);$x++)
        {
        echo "<li>$jazzArr[$x]</li>";
        echo "<br>";
        }
    }
      if(isset($_POST['comb1'])){
         
        $newA =(array_merge($rockArr,$cowboyArr));
        
         $randomNumber = rand(0, (count($newA) - 1));

    $image= $newAArr[$randomNumber];
    
     echo '<div class="column2">';
     echo "<img src=\"img/$image.jpg\" alt='$image'  width= '200px'/>";
     echo '</div>';
          
      }
      if(isset($_POST['comb2'])){
        
        $newA =(array_merge($popArr,$jazzArr));
        
         $randomNumber = rand(0, (count($newA) - 1));

    $image= $newAArr[$randomNumber];
    
     echo '<div class="column2">';
     echo "<img src=\"img/$image.jpg\" alt='$image'  width= '200px'/>";
     echo '</div>';
          
      }
  

?>
    
