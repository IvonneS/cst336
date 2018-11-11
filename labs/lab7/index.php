<?php
session_start();

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
         <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="indexBody">

        <h1> Ottermart - Admin Login </h1>
        
        <form method="post" action = "loginProcess.php">
          Username:  <input type="text" name="username"/> <br><br>
          Password:  <input type="password" name="password"/> <br><br>
          <input type="submit" value="Login" id="b1">
        </form>
            <?php
            //Check error
            ?>
    </body>
</html>