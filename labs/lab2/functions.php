<?php
        function displaySymbol($random_value, $pos)
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
           
           echo "<img id= 'reel$pos' src=\"img/$symbol.png\" alt='$symbol' title='".ucfirst($symbol)."'  width= '70px'/>";
        
          
      }

       function displayPoints($randomValue1, $randomValue2,$randomValue3)
        {
         echo "<div id='output'>";
         if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3)
         {
            switch ($randomValue1) {
                case 0: $totalPoints = 1000;
                        echo "<h1>Jackpot!</h1>";
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
       
       function play(){
           for($i=1; $i<4; $i++){
               ${"random_value" . $i} = rand(0,2);
               displaySymbol(${"random_value" . $i},$i);
           }
           displayPoints( $random_value1, $random_value2, $random_value3);
       }

?>