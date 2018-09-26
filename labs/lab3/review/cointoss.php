<!--it count how many flips; heads and  tails we have -->
<!--Date: 9/24/2018-->

<? php

session_start();//start with session 

if( !isset($_SESSION['head'])){//When the session doesnot exit only
   $_SESSION['head'] = 0;
   $_SESSION['tail'] = 0;
   $_SESSION['tossHistory'] = array();
}
   if(rand(0,1) == 0){
        $_SESSION['head']++;
        $_SESSION['tossHistory'][] = "H"; //adds element to array
        
    
   }else{
        $_SESSION['tail']++;
         $_SESSION['tossHistory'][] = "T";
   }
   
   
print_r($_SESSION['tossHistory']);
   
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Coin Flipping </title>
    </head>
    <body>
    
        <h2>Heads: <?= $_SESSION['head'] ?></h2>
        <h2>Tails: <?= $_SESSION['tail'] ?></h2>
    </body>
</html>