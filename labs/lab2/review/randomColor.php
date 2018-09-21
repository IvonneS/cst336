<!--This generate a random number everytime the page refresh-->
<!--Date:9/12/2018-->

<!--creating a function-->
  <?php
    function getLuckyNumber(){
        do{
                // echo rand(1,10);
              $num = rand(1,10);
        }while($num == 4);
         echo $num;
         
    }
    function getRandomClor(){
        echo "rgba(".rand(0,255).",".rand(0,255).",".rand(0,255).");";
    }
  ?>

<!DOCTYPE html>
<html>
    <head>
        <title> Random colors and numbers </title>
        <style>
            body{
               background-color: <?php getRandomClor();?>
               
            }
            h1{
                 background-color: <?php getRandomClor();?>
                 color: <?php getRandomClor();?>
            }
        </style>
    </head>
    <body>
        <h1> 
        My lucky number is:
        <?php
        
            getLuckyNumber();
        
        ?>
        </h1>
       
    </body>
</html>