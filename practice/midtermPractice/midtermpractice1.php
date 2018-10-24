
<?php
session_start();


function start(){
    $month = $_GET['select'];
    $location = $_GET['option'];
    $country = $_GET['select2'];
    $oder = $_GET['option2'];


    if(isset($month) && isset($location)){
    
        echo $month . " Itinerary "; 
        echo '<br/>';
        echo "Visiting " . $location . " places in " . $country;
        echo '<br/>';
        table($month);
        getPic($country, $order, $location);
    
    }
    if(!isset($location)){
        echo "<div id = 'error'>";
        echo "You must specify the number of locations!";
        echo "</div>";
    }
    if($month == "selectOne"){
        echo "<div id = 'error'>";
        echo "You must select a Month!";
        echo "</div>";
    }


}
function table($month){
    //The number of days per month are:
    //Feb-28, 4 weeks
    //Nov-30, 5 weeks
    //Dec and Jan: 31 5 weeks
    $ctn = 1;
    echo "<table>";
    if($month == "February"){
        for($i = 0; $i < 4; $i++){
            echo "<tr>";
            for($k = 0; $k < 7; $k++){
                echo "<td>". $ctn . "</td>";
                $ctn++;
            }
            echo "</tr>";
        }
    }
     if($month == "December" || $month == "January" || $month == "November"){
         for($i = 0; $i < 5; $i++){
             echo "<tr>";
            for($k = 0; $k < 7; $k++){
                if($month == "December" || $month == "January"){
                    if($ctn < 32){
                        echo "<td>". $ctn . "</td>";
                        $ctn++; 
                }   
                }
                if($month == "November"){
                    if($ctn < 31){
                        echo "<td>". $ctn . "</td>";
                         $ctn++; 
                  }  
                }
            }
            echo "</tr>";
        }
    }

}
function getPic($country, $order, $location){
    if($country == 'USA'){
        echo "<img src=\"img/USA/chicago.png\"  width= '90px'>";
        
    }
     if($country == 'Mexico'){
        echo "<img src=\"img/Mexico/$image.png\" alt='$image' width= '90px'>";
    }
     if($country == 'France'){
        echo "<img src=\"img/France/$image.png\" alt='$image' width= '90px'>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Winder Vacation Planner</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <h1>Winder Vacation Planner!</h1>
    </head>
    <body>
        <form method = "GET">
            Select Month:
            <select name = "select"> 
                
              <option value = "selectOne">select</option>
              <option value = "November">November</option></option>
              <option value = "December">December</option>
              <option value = "January">January</option>
              <option value = "February">February</option>
             
              </select>
              <br><br>
             Number of locations:
            <input type="radio" name="option" value = "3"/><b>Three</b>
            <input type="radio" name="option" value = "4"/><b>Four</b>
            <input type="radio" name="option" value = "5"/><b>Five</b>
            
            <br/><br/>
            Select Country:
            <select name = "select2"> 
                
              <option value = "USA">USA</option></option>
              <option value = "Mexico">Mexico</option>
              <option value = "France">France</option>
             
             
              </select>
              <br/><br/>
            Visit locations in alphabetical order:
            <input type="radio" name="option2" value = "a-z"/><b>A-Z</b>
            <input type="radio" name="option2" value = "z-a"/><b>Z-A</b>
            <br>
            <br>
       
            <input type="submit" name="create" value = "Create Itenerary!"/>
        </form> 
            <hr width="100%"/>
             <div>
                <?= start()?>
                 
             </div>

    </body>
</html>