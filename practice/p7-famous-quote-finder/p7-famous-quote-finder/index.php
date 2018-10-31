<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Famous Quote Finder</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>

    <h1 id="header">Famous Quote Finder</h1>
    
    <br/><br/>
    
    <form method="post">
        
        Enter Quote Keyword:
        <input type="text" name="quoteKey" id="quoteKeyText"/>
        
        <br/><br/>
        
        Category:
        <select name="category">
            <option value="Select One">Select One</option>
            <option value="Humor">Humor</option>
            <option value="Life">Life</option>
            <option value="Motivation">Motivation</option>
            <option value="Philosophy">Philosophy</option>
            <option value="Reflection">Reflection</option>
        </select>
        
        <br/><br/>
        
        Order: <br/>
        <input type="radio" name="order" value="AZ" id="orderByAZ"/>
        <label for="orderByAZ">A-Z</label>
        
        <br/>
        
        <input type="radio" name="order" value="ZA" id="orderByZA"/>
        <label for="orderByZA">Z-A</label>
        
        <br/><br/>
        
        <input type="submit" name="submit" value="Display Quotes!"/>
        
    </form>

    <?php
        include "form-logic.php";
    ?>

    </body>
</html>