<!--
Lab#4 
Dates; 
from 9/26/2018 to
-->

<?php

//print_r($_GET)//print is used to display the values in the array

$keyword =  $_GET['keyword'];
?>

<!DOCTYPE html>
<html>
    <head>
         <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <title> Lab 4: Pixabay Slideshow</title>
    </head>
    <body>
        <h1>You must type a keyword or select a category</h1>
        
        <!--form uses the get method by default-->
        <form method= "GET">
            <input type = "text" name="keyword" size = "15" placeholder = "Keyword" />
            <input type="submit" name="" value=""/>
            
        </form>
    </body>
</html>

<!--Get method is show it in the url of the page
to modify the url directely-->

<!--Post method is not showing it in the url
for: sensitive info, images, and a lot of data-->
