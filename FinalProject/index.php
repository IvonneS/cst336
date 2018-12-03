<!--There is a "user" section in which anyone can search and filter 
data by at least three fields and sort the results without having to login	-->
<?php
include '../inc/dbConnection.php';
$dbConn = startConnection("otter");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Page</title>
    </head>
    <body>
        <h1>Welcome </h1>
        <form>
            <b> Product Name: </b><input type="text" name="MovieName" placeholder="name" value = '<?php echo ($_GET['MovieName']) ?  $_GET['MovieName']  : ''; ?>'/> <br />
            <br>
            <b>Movies</b> <input type="radio" name="searchFor" value="movies" <?php echo ($_GET['searchFor'] == 'movies') ? 'checked="checked"' : ''; ?>>
            <b>Video Games</b><input type="radio" name="searchFor" value="video_games" <?php echo ($_GET['searchFor'] == 'video_games') ? 'checked="checked"' : ''; ?>><br>
            <br>
            <b> Genre:</b> 
            <select name="genre">
               <option value=""> Select one </option> 
               <?= displayGenre(); ?>
            </select>
            <br><br>
            <b>Price:  From: </b> <input type="number" name="priceFrom" size="6" value = '<?php echo ($_GET['priceFrom']) ?  $_GET['priceFrom']  : ''; ?>'/> 
            <b> To: </b> <input type="number" name="priceTo" size="6" value = '<?php echo ($_GET['priceTo']) ?  $_GET['priceTo']  : ''; ?>'/>
            <br>
            <b>Low to High Price</b> <input  type="radio"  name="orderBy" value="LToH" <?php echo ($_GET['orderBy'] == 'LToH') ? 'checked="checked"' : ''; ?>>
            <b>High to Low Price</b><input   type="radio"   name="orderBy" value="HToL" <?php echo ($_GET['orderBy'] == 'HToL') ? 'checked="checked"' : ''; ?>><br>
            <b>Alphabetical Order </b><input type="radio" name="orderBy" value="alphabetic" <?php echo ($_GET['orderBy'] == 'alphabetic') ? 'checked="checked"' : ''; ?>>
            <br><br>
            <input type="submit" name="searchForm" value="SEARCH" id="b1" />
        </form>
    </body>
</html>