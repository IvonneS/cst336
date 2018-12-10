<!--Make sure that you use "admin" / "secret" to access to admin section.-->
<?php
session_start();
 
  if(isset($_POST['login'])){

    include '../inc/dbConnection.php';
    $dbConn = startConnection("cosmetics");

    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $sql = "SELECT * FROM admin
                 WHERE username = :username 
                 AND  password = :password ";                 
    $np = array();
    $np[':username'] = $username;
    $np[':password'] = $password;

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting just one record

     header('Location: admin.php');  
 }

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
        
    </head>
    <body>

        <h1>  Admin Login </h1>
        
        <form method="post">
          Username:  <input type="text" name="username"/> <br><br>
          Password:  <input type="password" name="password"/> <br><br>
          <input type="submit" value="Login" name = "login" id="b1">
        </form>
      
    </body>
</html>