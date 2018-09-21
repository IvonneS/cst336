<?php
        function displaySymbol($random_value)
      {
            
            if ($random_value == 0) {
                
                $symbol = "seven";
                
            } else if ($random_value == 1) {
                
                $symbol = "orange";
                
            } else {
                
                $symbol = "cherry";
                
             }
            switch ($random_value) {
          
                case 0: $symbol = "seven";
                      break;
                case 1: $symbol = "cherry";
                      break;
                case 2: $symbol = "lemon";
                      break;
                case 3: $symbol = "grapes";
                      break;
                case 4: $symbol = "orange";
                      break;
          }
           //echo "<img id='reel$iHelper' src='img/$symbol.png' alt='$symbol' title='$symbol'>";
           echo "<img src=\"img/$symbol.png\" alt='$symbol' title='".ucfirst($symbol)."'/>";
          
      }

       function displayPoints($randomValue1, $randomValue2,$randomValue3)
     {
         echo "<div id='output'>";
         if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3)
         {
            switch ($randomValue1) {
                case 0: $totalPoints = 1000;
                    break;
                
                case 1: $totalPoints = 600;
                    break;
                
                case 2: $totalPoints = 900;
                    break;
            }
            echo "<h2>You Won $totalPoints Points!</h2>";
         }else{
            echo "<h3> Try Again! </h3>";   
         }
         echo"</div>";
     }
       
    

?>