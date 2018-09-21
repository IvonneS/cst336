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
        <div id="main">
        <?php
        /****************************************************
         $random_value1 = rand(0,2);//Generates random number
         displaySymbol($random_value1);
         $random_value2 = rand(0,2);
         displaySymbol($random_value2);
         $random_value3 = rand(0,2);
         displaySymbol($random_value3);
        
         echo "<br>Random value 1: $random_value1  <br>";
         echo "Random value 2: $random_value2  <br>";
         echo "Random value 3: $random_value3  <br>";
         */
         play();
         
        ?>
        <form>
            <input type="submit" value="Spin!"/>
        </form>
        </div>
    </body>
       <footer>
           <p><b>Image sources: </b><br>
               http://www.modern-canvas-art.com/ekmps/shops/robboweb1/images/slot-machine-symbols-pop-art-canvas-print-<br>4252-p.jpg 
               http://www.freeslotmachines.me.uk/ <br>
               http://img.over-blog-kiwi.com/1/18/84/05/20140812/ob_3ea045_slotmachine-wallpaper-777.jpg
               </p>
       </footer>
</html>