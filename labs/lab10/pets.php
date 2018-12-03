<?php
include '../../inc/dbConnection.php';
$dbConn = startConnection("c9");

function getAllPets(){
    global $dbConn;
    $sql = "SELECT name, type FROM pets ORDER BY name ASC";

    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
    print_r($record);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> CSUMB: Pet Shelter </title>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            body {
                text-align: center;
            }
        </style>
   
    </head>
    <body>
        
	  <?php 
	    include 'inc/header.php';
	  ?>
	  <script>
	      $('document').ready(function() {
	        $('.petLink').click(function(){
	           alert($(this).attr('id'));//this is the elemtn we are interact with 
	        
	      });
	      });
	  </script>
	  <?php
	  getAllPets();
	  foreach($pets as $pet){//displaying with ID
	      echo "<ul><li>Name: " ."<ahref='#' class = 'petLink' id = '". $pet['id']."'>" .  $pet['name'] . "</a></li>";
	      echo "<li> Type: " . $pet['type'] . "</li></ul>";
	  }
	  ?>
	  
        <?php
        include 'inc/footer.php';
        
        ?>
        </body>

</html>