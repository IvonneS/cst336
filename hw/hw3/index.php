<!--
Idea: Create a multiple choice quiz generator
Requirements: *There are at least four different types of Form Elements.
              *Upon submission of the form, the data is "processed" and new data is displayed.
              *Validation for all unset or empty values with error messages. 
              *Upon submission of the form, the form is displayed again,
              with the submitted values pre-filled.
Date: 10/17/2018
-->
<?php

function check(){
    $easy = array( //arith, algebra, geometry
    
  array("2.75 + .003 + .158 ", "2.911",
        "7.86 * 4.6 ", "36.156",
        "7 /20 ", "0.35",
        "3 /14 ","0.21",
        "9 /11 ","0.81",
        "2*1/2 + 4*2/3 ","7 1/6",
        " 3*1/3 - 2*2/5", "14/15",
        "46.2 * 10 to -2", "0.462",
        "59.6 + 0.001","59.601",
        "3/4 of 6","4 2/4",
        "9/10 * 11","9 9/10"),
  array("When y= 4, y + 6 ","10",
        "When y = 7, 3 + y ","10",
        "1 + y = 10, what is y","9",
        "9 + x = 15, what is x","6",
        "6 + z = 13, what is z","7",
        "6 + y = 10, what is y","4",
        "When x =2 and y = 50, x * y ","100",
        "When z =30 and y = 15, z * y ","450",
        "When k =45 and l = 29.5, k + l ","74.5",
        "When x =2 and y = 50, y / x ","25"),
  );
$middle = array(
  array("One way to write 25 percent of N is ","25 N",
  " 32 is 40 percent of what number? ","80", 
  "What is (1,345)/ (99) rounded to the nearest integer ","14",
  "Three of four numbers have a sum of 22. If the average of the four numbers is 8, what is the fourth number", "10",
  " If  (3/2) ÷(1/4)= n,  then n is between ","5 and 7",
  "What is 12% of 120? ", "14.4",
  "What is closest to 27.8 * 9.6 ", "280",
  "Which of the following is the least;  0.105, 0.015 or 0.15  ", "0.015",
  "78 is 15% of what number ","520",
  "What is the percent od 3/4 ","75%"
  ),
  
  array("-6x + 5 + 12x - 6 ","6x -1",
        "2(x - 9)","2x - 18 ",
        "2x = 6","x = 3",
        "6x - 8 = 4x + 4 ","x = 6",
        "4(x-2) = 2(x+3) + 7 ","x = 21/2",
        "0.1 x -1.6 = 0.2x + 2.3","x = -39",
        "-x/5 = 2","x = -10",
        "(x-4)/(-6) = 3","x = -14",
        "(-3x+1)/(x-2) = -3","no solution",
        "x/5 + (x-10)/3 = 1/5","x = 1"),
    );
$hard = array(
  array("The measures of two angles of a triangle are 35° and 45°. What is the measure of the third angle of the triangle ","100 percent",
  " Erica bought 3 1/2 yards of fabric. If she uses 2/3  of the fabric to make a curtain, how much will she have left "," 1  1/6 yd",
  "The ratio between the speeds of two trains is 7 : 8. If the second train runs 400 kms in 4 hours, then the speed of the first train is: ","87.5 km/hr",
  "The total of the ages of Amar, Akbar and Anthony is 80 years. What was the total of their ages three years ago ","71 years",
  "Two bus tickets from city A to B and three tickets from city A to C cost Rs. 77 but three tickets from city A to B and two tickets from city A to C cost Rs. 73. What are the fares for cities B and C from A ","Rs. 13, Rs. 17",
  "An institute organised a fete and 1/5 of the girls and 1/8 of the boys participated in the same. What fraction of the total number of students took part in the fete ","Data inadequate",
  "A pineapple costs Rs. 7 each. A watermelon costs Rs. 5 each. X spends Rs. 38 on these fruits. The number of pineapples purchased is ","4",
  "A is 3 years older to B and 3 years younger to C, while B and D are twins. How many years older is C to D ","6",
  "12 year old Manick is three times as old as his brother Rahul. How old will Manick be when he is twice as old as Rahul ","16 years",
  "There are deer and peacocks in a zoo. By counting heads they are 80. The number of their legs is 200. How many peacocks are there ","60"
  ),
  
  array("sqrt(x) = -1","no solution",
        "2(x - 2) < -(x + 7)","x < -1",
        "sqrt(x) = 5","x = 25",
        "x + 3 < 0","x < -3",
        "sqrt(x/100) = 4","x = 1600",
        "sqrt(200/x) = 2","x = 50",
        "x + 1 > -x + 5","x > 2",
        "What is the y intercept of the line -4x + 6y = -12","(0,-2)",
        "What is the x intercept of the line -3x + y = 3","(-1,0)",
        "What is the slope of a line parallel to the x axis?","slope = 0"),
    );
 //*************************************************************************************************
    
    

    $level = $_GET['option'];
    $topic = $_GET['select'];
    $num = $_GET['question_num'];
    
  
    if(!isset($level)){
        
        echo "<h3 id = 'error'> Please select one difficulty level </h3>";
    }
    if($topic == "0"){
        echo "<h3 id = 'error'>You must select a Topic</h3>";
    }
   
    else{
        
         $count = 1;
         if(empty($num)){
            $num = 10;
         }
        
    echo '<hr width="100%"/>';
    echo "<div id = 'output'>";
    echo "<h2>" . $topic . " Quiz</h2>";
         
    switch ($level) {
            
    case 'low':
        if($topic == 'Arithmetic'){
            $j = 1;
           for($i = 0; $i < $j; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                       
                        echo  $count . ") " . $easy[$i][$k] . "? <br/>";
                        
                    $count++;
                    }
                    }
            }
          if(isset($_GET['checkbox']))
                    {
                        echo "<div id = 'output2'>";
                        getAns($num,$easy,$j);
                         echo "</div>";
                    } 
        }
         if($topic == 'Algebra'){
             $j = 2;
            for($i = 1; $i < 2; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo  $count . ") " . $easy[$i][$k] . "? <br/>";
                    $count++;
                    }
                    }
            }
          if(isset($_GET['checkbox']))
                    {
                        echo "<div id = 'output2'>";
                        getAns($num,$easy,$j);
                         echo "</div>";
                    }   
        }
        break;
        
    case 'middle':
         if($topic == 'Arithmetic'){
               $j = 1;
               for($i = 0; $i < 1; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                      
                        echo  $count . ") " . $middle[$i][$k] . "? <br/>";
                        
                    $count++;
                    }
                    }
            }
        if(isset($_GET['checkbox']))
                    {
                        echo "<div id = 'output2'>";
                        getAns($num,$middle,$j);
                         echo "</div>";
                    } 
        }
         if($topic == 'Algebra'){
             $j = 2;
             for($i = 1; $i < 2; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                    
                        echo  $count . ") " . $middle[$i][$k] . "? <br/>";
                        
                    $count++;
                    }
                    }
            }
         if(isset($_GET['checkbox']))
                    {
                        echo "<div id = 'output2'>";
                        getAns($num,$middle,$j);
                         echo "</div>";
                    }
        }
        break;
       
    case 'high':
        
          if($topic == 'Arithmetic'){
              $j = 1;
              for($i = 0; $i < 1; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo '<div id = "questions">';
                        echo  $count . ") " . $hard[$i][$k] . "? <br/>";
                        echo '</div>';
                    $count++;
                    }
                    }
            }
            if(isset($_GET['checkbox']))
                    {
                        echo "<div id = 'output2'>";
                        getAns($num,$hard,$j);
                         echo "</div>";
                    }
        }
         if($topic == 'Algebra'){
             $j = 2;
             for($i = 1; $i < 2; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo  $count . ") " . $hard[$i][$k] . "? <br/>";
                    $count++;
                    }
                    }
            }
        if(isset($_GET['checkbox']))
                    {
                        echo "<div id = 'output2'>";
                        getAns($num,$hard,$j);
                         echo "</div>";
                    }
            
        }
        break;
    
    }
    echo "</div>";
 }
}
function getAns($num, $array, $j){
    $count = 1;
    echo "<h3>Answers...</h3>";
    if($j == 2){$i =1;}
    if($j == 1){$i =0;}
    for($i; $i < $j; $i++){
        for($k=0; $k < $num*2; $k++){
            if($k%2 != 0){
                echo $count .") " . $array[$i][$k] . "<br/>"; 
                $count++;
            }
           
        }
    }
    
}
?>




<!DOCTYPE html>
<html>
    <head>
        <title> homework #3</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <h1>Quiz Generator</h1>
    </head>
    <body>
        <form method = "GET">
            
             <h2>Choose one</h2>
             <input type="radio" name = "option" value="high"/> Advanced
             <input type="radio" name = "option" value="middle"/> Intermediate
             <input type="radio" name = "option" value="low"/> Beginner <br/><br/>
             
             <select name = "select">
              <option value = "0">- Select Topic -</option>
              <option value = "Arithmetic">Arithmetic</option>
              <option value = "Algebra">Algebra</option>
              <!--<option value = "Random">Random</option>-->
             
              </select>
              <br/><br/>
               how many questions? <input type="text" name="question_num" size="5" id="question_num"/>(from 1 to 10) <br/>
              <input type="checkbox" name="checkbox" id="digits" value ="digits" unchecked="unchecked"/>Show answers at the end?</font><br/><br/>
     
            <div>
                 <br/>
              <input type="submit" name="submitBtn" id = "b1" value="Create Quiz" />
            </div>
             </form>
            
               <?php 
               
                if(isset($_GET['submitBtn']))
                 {
                  check();
                 } 
                
                 
               ?>
                
                
            

    </body>
</html>