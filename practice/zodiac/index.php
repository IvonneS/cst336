<?php

$zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");

function yearList($startyear, $endyear){
    
     for($i = $startyear;$i <= $endyear;$i++){
         
         echo "<li> year $i</li>";
         
         if($i == 1776){
            echo "<strong>USA Independace</strong>";
         }
         if($i % 100 == 0){
             echo "<strong>Happy New Century!</strong>";
         }
         
     }
}
function yearSum($startyear, $endyear){
    $total = 0;
    
    for($i = $startyear;$i <= $endyear;$i++){
        $total += $i; 
    }
    
    return $total;
    
}

// **************************************************************************************
  $colums = $_GET['numC'];
  $rowa = $_GET['numR'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Aces vs Kid</title>
        
        <h1><strong>Chinase Zodiac</strong></h1>
    </head>
    <body style = "text-align:center">
         <ol> <?= yearList(1500,2000) ?>
         </ol>
         
         <?= yearSum(1500, 2000)?>
    </style>
     <form method = "GET">
         Number of Rows: <!--horizontal-->
         <input type="text" name="numR" size = "5"/> <br/>
         Number of Columns: <!--vertical-->
         <input type="text" name="numC" size = "5"/>
         
     </form>
     
     
     
    </body>
</html>