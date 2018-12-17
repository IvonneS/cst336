<?php
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
         <title>Welcome</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
      
    </head>
    <body>
        
        <h1> WELCOME</h1>
        
         <h3>Welcome <?= $_SESSION['Name'] ?> </h3>

          
    </body>
</html>