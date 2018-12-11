<?php
session_start();
 
  if(isset($_POST['login'])){

    include '../../inc/dbConnection.php';
    $dbConn = startConnection("ottermart");

    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $sql = "SELECT * FROM om_admin
                 WHERE username = :username 
                 AND  password = :password ";                 
    $np = array();
    $np[':username'] = $username;
    $np[':password'] = $password;

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting just one record


    if (empty($record)) {
    
    echo " <div class = 'errorMessage'> ";
    echo "Wrong username or password!!" ;
    echo "</div>";
    } else {
   header('Location: admin.php'); //redirects to another program
    
  }
 }

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
         <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body id="indexBody">

        <h1> Ottermart - Admin Login </h1>
        
        <form method="post">
          Username:  <input type="text" name="username"/> <br><br>
          Password:  <input type="password" name="password"/> <br><br>
          <input type="submit" value="Login" name = "login" id="b1">
        </form>
            <?php
            //Check error
            ?>
    </body>
</html>