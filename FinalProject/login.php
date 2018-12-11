<!--Make sure that you use "admin" / "secret" to access to admin section.-->
<?php

session_start();

function check(){ 
  if(isset($_POST['login'])){

    include '../inc/dbConnection.php';
    $dbConn = startConnection("cosmetics");

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin
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
    echo "Wrong username or password!! <br>" ;
    echo "<img src = 'img/eyes.jpg' height='300'"; 
    echo "</div>";
    } else {
   
   $_SESSION['adminFullName'] = $record['firstName'] .  "   "  . $record['lastName'];
   header('Location: admin.php'); //redirects to another program
 }

}
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
        
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
                
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">EASY MAKEUP</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li>
            <a class="nav-link" href="index.php">Home</span></a>
          </li>
        </ul>
      </div>
    </nav>
    </head>
    <style>
      body{
        text-align:center;
      }
      .errorMessage{
        color:red;
        font-size: 20px;
      }
    </style>
    <body>

        <h1>  Admin Login </h1>
        
        <form method="post">
          Username:  <input type="text" name="username"/> <br><br>
          Password:  <input type="password" name="password"/> <br><br>
          <input type="submit" value="Login" name = "login" id="b1">
        </form>
        <br><br>
       <?php  check();  ?>
    </body>
</html>