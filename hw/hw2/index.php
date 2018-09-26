<!--This Album Generator will display random albums depending on what the user wants to see
Author: Ivonne G
Date: 9/25/2018-->


<?php
        include 'functions.php';
    ?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            @import url("css/style.css");
        </style>
        <title>Homework2 </title>
    </head>
    <body>
        <h2>Albumm Generator</h2>
      <div class ="row">
             <div class = "column">
                  <form method="post">
                <button type="select" name = "icon1"><img src="img/hand.jpg" alt = "1st image" width = "75px"/></button>
                   </form>
             </div>
        
             <div class = "column">
                 <form method="post">
                <button type="select" name = "icon2"><img src="img/gorra.jpg" alt = "2nd image" width = "75px"/></button>
                </form>
                 
             </div>
            
      <div class ="row">
             <div class = "column">
                 <form method="post">
                <button type="select" name = "icon3"><img src="img/jazz.jpg" alt = "3rd image" width = "75px"/></button>
                </form>
                  
             </div>
           
             <div class = "column">
                 <form method="post">
                <button type="select" name = "icon4"><img src="img/pop.jpg" alt = "4th image" width = "75px" /></button>
                </<form>
                   
             </div>
        </div>
        <hr width="100%"/>
        <div class = "options">
            <form method="post">
                <button type="select" name = "listA"><b>Show list of Rock albums</b> </button>
                <button type="select" name = "listB"><b>Show list of Band albums</b> </button>
                 <button type="select" name = "listC"><b>Show list of Pop albums</b> </button>
                  <button type="select" name = "listD"><b>Show list of Jazz albums</b> </button>
            </form>
            
        </div>
    </body>
     <hr width="100%"/>
       <footer>
            <em> CST336 Internet Programming. 2018&copy; Garcia<br /></em>
             <img src="../../img/csumb.png" alt = "csumb logo"/>
       </footer>
</html>