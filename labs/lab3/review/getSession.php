<?php
session_start();//start with session 



?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
       
    </head>
    <body>
            <h1>
                My name is <?= $_SESSION["name"] ?>
            </h1>
    </body>
</html>