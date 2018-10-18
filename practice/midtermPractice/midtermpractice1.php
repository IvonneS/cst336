
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
    
    }
    if(!isset($location)){
        echo "You must specify the number of locations!";
    }
    if(!isset($month)){
        echo "You must select a Month!";
    }


}
function table($month){
    //nov = 30 days
    //dec, jan = 31 days
    //febr = 28 days 4weeks
    if($month == "November"){
        for($i = 0; $i < 4; $i++){
            for($k = 0; $k < 8; $k++){
                
            }
        }
    }
     if($month == "December" || $month == "January" || $month == "February"){
         for($i = 0; $i < 5; $i++){
            for($k = 0; $k < 8; $k++){
                
            }
        }
    }

}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Winder Vacation Planner</title>
        
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