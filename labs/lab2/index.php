 <?php
        include 'functions.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/styles.css");
        </style>
        <title>777 Slot Machine </title>
    </head>
    <body>
        <div>
             <?php
        
         $random_value1 = rand(0,2);//Generates random number
         displaySymbol($random_value1);
         $random_value2 = rand(0,2);
         displaySymbol($random_value2);
         $random_value3 = rand(0,2);
         displaySymbol($random_value3);
        
         echo "<br>Random value 1: $random_value1  <br>";
         echo "Random value 2: $random_value2  <br>";
         echo "Random value 3: $random_value3  <br>";
        ?>
        </div>

    </body>
</html>