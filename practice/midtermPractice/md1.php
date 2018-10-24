<?php
$month = $_GET["days"];
$locations = $_GET["locations"];
$country = $_GET["country"];
$order = $_GET["order"];
    if(empty($month)) {
        $monthErr = "Month required"; 
    }
    if(empty($locations)) {
        $locationsErr = "Number of locations is required";
    }
    if(empty($country)) {
        $countryErr = "Country is required";
    }
    if(empty($order)) {
        $orderErr = "order is required";
    }
$photosF = array("bordeaux", "le_havre", "lyon","montpellier","paris", "strasbourg");
$photosM = array("acapulco", "cabos", "cancun","chichenitza","huatulco", "mexico_city");
$photosU = array("chicago", "hollywood", "las_vegas","ny","washington_dc", "yosemite");
function printRandomPhotos() {
    global $country;
    global $photosF;
    global $photosM;
    global $photosU;
    $c;
    if($country == "USA") {
        $c = $photosU;
    }
    else if($country == "Mexico") {
        $c = $photosM;;
    }
    else {
        $c = $photosF;
    }
    global  $locations;
    //global $photosF;
    $randValue = rand(0, $locations);
    echo "<img src = 'img/$country/$c[$randValue].png' alt = '$country' />";
    echo "<br />";
    echo $c[$randValue];
    $countryName = array();
    array_push($countryName, $c[$randValue]);
    $ac = sort($countryName);
    $dc = rsort($countryName);
    if($order == "A-Z"){
        echo $ac;
    }
    else{
        echo $dc;
    }
}
   
function printphotos() {
    global $locations;
    echo "<em>$locations</em>";
}
function printTable() {
    global $month;
    global $locations;
    $printMonth;
    if($month == "Jan") {
        $printMonth = "January";
    }
    else if($month == "Feb") {
        
        $printMonth = "February";
    }
    else if($month =="Dec" ) {
        $printMonth = "December";
    }
    else {
        $printMonth = "November";
    }
    $LenMonth = 30;
    echo "<h1>" ." ".$printMonth. " ". "Itinerary</h1>";
    echo "<h2>Visiting" . " " .$locations. " " ."in USA</h2>";
    switch($month) {
        case "Jan":
            $LenMonth = 31;
            break;
        case "Feb":
            $LenMonth = 28;
            break;
        case "Nov":
            $LenMonth = 30;
            break;
        default:
            $LenMonth = 31;
    }
    $placePhoto = array();
    for($x = 0; $x <= $locations; $x++) {
        $randPlace = rand(1, $locations);
        array_push($placePhoto, $randPlace);
    }
    //$aplacePhoto = sort();
    //print_r($placePhoto);
    echo "<table class = 'table'>";
    for($i = 0; $i < $LenMonth; $i++) {
        if($i % 7 == 0) {
            echo "<tr>";
        }
        echo "<td>";
        echo ($i + 1);
        if(in_array($i, $placePhoto)){
            printRandomPhotos();
        }
        echo "</td>";
    }
   echo "</tr>";
   echo "</table>";
  
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Winnter Vacation Planner</title>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <h1>Winter Vacation Planner!</h1>
        <form method = "GET">
            Select Month: 
            <select name = "days">
                <option value ="" >-Select One-</option>
                <option value ="Jan" >January</option>
                <option value ="Feb" >February</option>
                <option value ="Nov" >November</option>
                <option value ="Dec" >December</option>
            </select><?php echo "*" . $monthErr;?><br />
            Number of locations:
            <input type = "radio" name = "locations" value = 3>Three
            <input type = "radio" name = "locations" value = 4> Four
            <input type = "radio" name = "locations" value = 5> Five
            <?php echo "*" . $locationsErr?><br /><br />
            Select Country: 
            <select name = "country">
                <option value = "">Select</option>
                <option value = "USA">USA</option>
                <option value = "Mexico">Mexico</option>
                <option vlue = "France">France</option>
            </select><?php echo "*" . $countryErr?> <br />
            Visit Locations in alphabetical order: 
            <input type = "radio" name = "order" value = "A-Z">A-Z
            <input type = "radio" name = "order" value ="Z-A">Z-A 
            <?php echo "*" . $orderErr?><br/>
            <input type = "submit" name = "submit" value = "Create Itinerary">
        </form>
        <?php printTable();?>

    </body>
</html>
