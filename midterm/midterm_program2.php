<?php
include '../inc/dbConnection.php';
$dbConn = startConnection("midterm");

function displayAlbert(){
     global $dbConn;
    $sql = "SELECT * FROM `q_quotes` WHERE author LIKE 'Albert%'";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<li>". $record['quote'] . "</li>". "<br>";
    }
}
function displayLifeQuotes(){
     global $dbConn;
    $sql = "SELECT * FROM `q_quotes` WHERE quote LIKE '%life%'";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<li>". $record['quote'] . "</li>" . "<br>";
    }
    
}
function displayAll(){
     global $dbConn;
    $sql = "SELECT * FROM `q_quotes` ORDER BY quote";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<li>". $record['quote'] . "</li>". "<br>";
    }
    
}
function display(){
     global $dbConn;
    $sql = "SELECT * FROM `q_quotes` ORDER BY num_likes DESC LIMIT 1";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo  "<li>". $record['quote'] . "</li>" ."<br>";
    }
    
}
function displayRandom(){
     global $dbConn;
    $sql = "SELECT * FROM `q_quotes` ORDER BY quote RAND() LIMIT 1";
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo  "<li>". $record['quote'] . "</li>" ."<br>";
    }
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Midterm program 2 </title>
         <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <h2>Example Results</h2>
    </head>
    <body> 
         <div id = "md2">
            <h1>Quotes from Albert Einstein</h1>
            <?php displayAlbert(); ?> <br>
            
             <h1>Quotes about Life</h1>
            <?php displayLifeQuotes(); ?> <br>
            
             <h1>Quotes in Alphabetical Order</h1>
            <?php displayAll(); ?> <br>
            
             <h1>Most Liked Quote</h1>
            <?php display(); ?> <br>
            
             <h1>Random Quote</h1>
            <?php ?>
            </div>
    </body>
    
          
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#808000">
      <td>1</td>
      <td>The report shows all quotes from Albert Einstein in descending order</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#808000">
      <td>2</td>
      <td>The report shows all quotes that have the words  "life" in it.</td>
      <td width="20" align="center">10</td>
    </tr>  
    <tr style="background-color:#808000">
      <td>3</td>
      <td>The report all quotes in alphabetical order</td>
      <td width="20" align="center">10</td>
    </tr>     
    <tr style="background-color:#808000">
      <td>4</td>
      <td>The report shows the most liked quote in the database.</td>
      <td width="20" align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>Show a random quote from the database</td>
      <td width="20" align="center">10</td>
    </tr>    
    
    <tr style="background-color:#99E999">
      <td>6</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
     </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>    

    
</html>