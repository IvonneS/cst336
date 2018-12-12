<!--Page to do changes in database from admin -->
<? php
session_start();
include '../inc/dbConnection.php';
$dbConn = startConnection("cosmetics");


function displayAll(){
    global $dbConn; 
 
    $sql = "SELECT * FROM product ORDER BY product_Name";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple records

    foreach ($records as $record) {
    
                    echo "Name: ". $record['product_Name'] . "<br>";
                    echo "Brand:". $record['branch'] . "<br>";
                    echo "<img src = '". $record['product_Image'] . "' width='200' height='150' alt = 'image'><br><br> ";
                    echo " Price: $" . $record['product_Price'] .   "<br>";
                     echo  "Description: " . $record['product_Description'] . "<br>";
    }
}

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Admin Page</title>
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
          <li class="nav-item">
            <a class="nav-link" href="report.php">Admin Report</a></a>
          </li>
        </ul>
      </div>
    </nav>
        <title> Admin Main Page </title>
       
        <style>
           
            form {
                display: inline-block;
            }
            body{
                text-align:center;
                background-image: url("img/pic2.jpg");
                background-size: cover;

            }
            
        </style>
         
    </head>
    <body>
        
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