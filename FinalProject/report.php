
<!--*****************************************************************************************************
Administrators can generate at least three reports, which use aggregate functions 
(e.g., average price of all products in the table)	

-->
<?php
include 'functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
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
            <a class="nav-link" href="admin.php">Admin Page</a></a>
          </li>
        </ul>
      </div>
    </nav>
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script>
            $("document").ready(function(){
                $("#button_1").click(function(e) {
                   e.preventDefault();
    
                    $.ajax({
            
                    type: "GET",
                    url: "db.php",
                    data: { "button_1":$("#button_1").val() },
                    success: function(data) {
                        $("#sum").html(data);
                       
                        

                },
                complete: function(data,status) { //optional, used for debugging purposes
               // alert(status);
                }
            
                 });
                  
              });
             
          });
</script>
        <title>Admin</title>
        <h1>Admin Report</h1>
    </head>
        <style>
            form {
                display: inline-block;
            }
            table{
                text-align:center;
                margin-left: 550px;
                font-size: 20px;
            }
             body{
                text-align:center;
                background-image: url("img/pic2.jpg");
                background-size: cover;

            }
        </style>
    <body>
        <table>
            <form>
              <button id="button_1" value="val_1" name="but1">Get Sum</button>
             </form>
            <tr>
            
           
                <th>Sum </th>
                <th>Average</th>
                <th>Max Value</th>
               
                
            </tr>
            <tr>
               
                <td><label id= "sum"></label></td>
                <td><label id= "avg">    <?= displayAvg() ?></label></td>
                <td><label id= "max">    <?= displayMax() ?></label></td>
            </tr>
            
        </table>
             <br><br>
            <form action="logout.php">
              <input type="submit" value="Logout">
          </form>
        
       
    </body>
</html>

