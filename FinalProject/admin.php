<!--Page to do changes in database from admin -->
<? php
include 'functions.php';
session_start();

if(isset($_SESSION['Login'])){
    header("Location: login.php");
}

include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");

validateSession();

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <style>
            form {
                display: inline-block;
            }
        </style>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" type="text/css" />
      
    
    </head>
    <body id="adminBody">
        
        <h1> ADMIN SECTION </h1>
        
         <h3>Welcome Admin! </h3>

          <form action="addProduct.php">
              <input type="submit" value="Add New Product">
          </form>
         <form action="logout.php">
              <input type="submit" value="Logout">
          </form>

           <br><br>
        
    </body>
</html>