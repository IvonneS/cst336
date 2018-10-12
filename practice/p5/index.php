<!--Practice 5
Date: 10/8/2018
Using validation form for pasword-->

<?php
session_start();

include "functions.php";
$number = $_GET['password_num'];
$charcter_num = $_GET['option'];
$passwords = array();


if($number < 0 || $number > 8){
    echo "Enter a number less than 8"; 
}
else{
    
    for($i = 0; $i < $number; $i++){
       
    }
    
    if ($charcter_num == 'six'){
        getChar($charcter_num);
    }
    if ($charcter_num == 'eight'){
    
    }
    if ($charcter_num == 'ten'){

    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title
        <br/>
        <h1>Custom Password Generator</h1><br><br/>
    </head>
    
    <body>
        <style>
            body{
                background-color:pink;
                text-align: center;
            }
        </style>
        <form method = "GET">
        how many passwords? <input type="text" name="password_num" size="5" id="password"/>
        (No more than 8)<br/><br/>
        
        <b>Password Lenght</b><br/>
        <div>
        <input type="radio" name="option" value = "six"/>6 Characters
        <input type="radio" name="option" value = "eight"/>8 Characters
        <input type="radio" name="option" value = "ten"/>10 Characters
        </div>
        
        
        
        <input type="checkbox" name="checkbox" id="digits" value ="digits" unchecked="unchecked"/> Include digits(up to 3 digits will be part of the password)</font><br/><br/>
     
    
        
        <input type="submit" name="button1" value = "create paswords!" /><br/> <br/>
        
        
        <input type="submit" name="button2" value = "Display Password History"/>
        
        </form>
    </body>
</html>