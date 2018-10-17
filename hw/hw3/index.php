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
    $easy = array( //arith //algebra
    
  array("2.75 + .003 + .158 ", "2.911",
        "7.86 * 4.6 ", "36.156",
        "7 /20 ", "0.35",
        "What is closest to 27.8 * 9.6 ", "280",
        "Which of the following is the least;  0.105, 0.015 or 0.15  ", "0.015",
        "2*1/2 + 4*2/3 ","7 1/6",
        " 3*1/3 - 2*2/5", "14/15"),
  array(),
  array(),
  
  );
$middle = array(
  array("All of the following are ways to write 25 percent of N  EXCEPT for: ","25 N", " 32 is 40 percent of what number? ", "What is (1,345)/ (99) rounded to the nearest integer? ", "Three of four numbers have a sum of 22. If the average of the four numbers is 8,
  what is the fourth number", "46.2 × 10-2 ", " If  (3/2) ÷(1/4)= n,  then n is between ","What is 12% of 120? "),
  
  
  array(),
  array(),
  
    );
$hard = array(
  array("The measures of two angles of a triangle are 35° and 45°. What is the measure of the third angle of the triangle? ","100°"," Erica bought 3 ½  yards of fabric. If she uses 2/3  of the fabric to make a curtain, how much will she have left? "," 1  1/6 yd", "The ratio
  between the speeds of two trains is 7 : 8. If the second train runs 400 kms in 4 hours, then the speed of the first train is:","87.5 km/hr"),
  
  array(),
  
  array(),
 
    );
    
//*************************************************************************************************
    

  
    $level = $_GET['option'];
    $topic = $_GET['select'];
    $num = $_GET['question_num'];
    $ans = $_GET['checkbox'];
  
    if(!isset($level)){
        echo "Please select one difficulty level ";
        echo "<br/>";
    }
    if($topic == "0"){
        echo "You must select a Topic";
        echo "<br/>";
    }
   
    else{
        
         $count = 1;
         if(empty($num)){
            $num = 10;
         }
        
    echo '<hr width="100%"/>';
    echo "<h2>" . $topic . " Quiz</h2>";
         
    switch ($level) {
            
    case 'low':
        if($topic == 'Arithmetic'){
           for($i = 0; $i < 1; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo '<div id = "questions">';
                        echo  $count . ") " . $easy[$i][$k] . "? <br/>";
                        echo '</div>';
                    $count++;
                    }
                    }
            }
        
        }
         if($topic == 'Algebra'){
            for($i = 1; $i < 2; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo  $count . ") " . $easy[$i][$k] . "? <br/>";
                    $count++;
                    }
                    }
            }
            
        }
         if($topic == 'Geometry'){
             for($i = 2; $i < 3; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo  $count . ") " . $easy[$i][$k] . "? <br/>";
                    $count++;
                    }
                    }
            }
            
        }
       
        break;
        
    case 'middle':
         if($topic == 'Arithmetic'){
               for($i = 0; $i < 1; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo '<div id = "questions">';
                        echo  $count . ") " . $middle[$i][$k] . "? <br/>";
                        echo '</div>';
                    $count++;
                    }
                    }
            }
        }
         if($topic == 'Algebra'){
             for($i = 1; $i < 2; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo '<div id = "questions">';
                        echo  $count . ") " . $middle[$i][$k] . "? <br/>";
                        echo '</div>';
                    $count++;
                    }
                    }
            }
        }
         if($topic == 'Geometry'){
             for($i = 2; $i < 3; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo '<div id = "questions">';
                        echo  $count . ") " . $middle[$i][$k] . "? <br/>";
                        echo '</div>';
                    $count++;
                    }
                    }
            }
        }
       
        break;
       
    case 'high':
          if($topic == 'Arithmetic'){
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
        }
         if($topic == 'Algebra'){
             for($i = 1; $i < 0; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo '<div id = "questions">';
                        echo  $count . ") " . $hard[$i][$k] . "? <br/>";
                        echo '</div>';
                    $count++;
                    }
                    }
            }
            
        }
         if($topic == 'Geometry'){
             for($i = 2; $i < 3; $i++){
                for($k=0; $k < $num*2; $k++){
                    if($k%2==0){
                        echo '<div id = "questions">';
                        echo  $count . ") " . $hard[$i][$k] . "? <br/>";
                        echo '</div>';
                    $count++;
                    }
                    }
            }
        }
         
        break;
    }
        
        
    }
}

function getAns($num, $array){
    
    for($i = 0; $i < $num; $i++){
        for($k=0; $k < $num; $k++){
            if($k%2 != 0){
                echo "answer: " . $array[$i][$k]; 
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
              <option value = "Geometry">Geometry</option>
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
            <div id = "output">
               <?php 
               
                if(isset($_GET['submitBtn']))
                 {
                  check();
                 } 
               
               ?>
                
                
            </div>

    </body>
</html>