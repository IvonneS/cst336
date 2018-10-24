<?php
$size = $_GET["size"];
$order = $_GET["option2"];
$gender = $_GET["option"];
$img = $_GET["checkbox"];
$generate = $_GET['generate'];
$history = $_GET['history'];

$fem = array( "leo", "mario", "monte", "spiderman", "goku");
$male = array("rey","gamora","wonderwoman","xena","blossom");
function start(){
    global $size;
    global $order;
    global $gender;
    global $img;
    global $generate;
    global $history;
    if(isset($generate)){
        if(empty($size) || $size < 2) {
        echo "<div id = 'error'>";
        echo "You must enter a Team Size!"  . "<br>";
        echo " Team Size Must be between 2 and 10";
        echo "</div>";
        }
        if(empty($gender)) {
       
        echo "<div id = 'error'>";
        echo " You must specify Team Gender!";
        echo "</div>";
        }
        if($gender == 'f' || $gender == 'm'){
            if($size < 2 && $size > 5) {
            echo "<div id = 'error'>";
            echo "Size Must be less than 6 for not Coed Teams";
            echo "</div>";
          }else{
            //   call function
          }
        }
        if($gender == 'c'){
            if($size < 2 && $size > 10) {
            echo "<div id = 'error'>";
            echo "Team Size Must be between 2 and 10";
            echo "</div>";
          }else{
            //   callfunction
          }
        }
        
    }
    if(isset($history)){
        include 'history.php';
        
        
    }
    
}

function getPic(){
    global $fem;
    global $male;
    
    
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Team Generator</title>
        <h1>Superhero Team Generator</h1>
         <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form method = "GET">
         Team Size: <input type="text" name="size" size="5" value= '<?php echo $_GET["size"] ?>'><br/>  
        
         Team Gender: 
            <input type="radio" name="option" value = "f"<?php if($_GET["option"] == 'f') {echo 'checked';}?>/><b>Female</b>
            <input type="radio" name="option" value = "m"<?php if($_GET["option"] == 'm') {echo 'checked';}?>/><b>Male</b>
            <input type="radio" name="option" value = "c"<?php if($_GET["option"] == 'c') {echo 'checked';}?>/><b>Coed</b>
            <br>
         Display team members in alphabetical order:
            <input type="radio" name="option2" value = "a"<?php if($_GET["option2"] == 'a') {echo 'checked';}?>/><b>A-Z</b>
            <input type="radio" name="option2" value = "z"<?php if($_GET["option2"] == 'z') {echo 'checked';}?>/><b>Z-A</b>
            <br>
            <input type="checkbox" name="checkbox" value ="img" unchecked="unchecked"<?php if($_GET["checkbox"] == 'img') {echo 'checked';}?>/>Display Images</font><br/>
            <br>
            <input type="submit" name="generate"  value="Generate Team" /><br><br>
            <input type="submit" name="history" value="Team History" />
        </form>
         <?= start()?>
         
         
         <br><br><br><br>
    </body>
    <footer>
          
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#808000">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: checkbox, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:#808000">
      <td>2</td>
      <td>Error is displayed if team gender is not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#808000">
      <td>3</td>
      <td>Error is displayed if team size is less than 1 or left blank </td>
      <td align="center">5</td>
    </tr>    
   <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>Error is displayed if team size is greater than 5 AND gender is not coed, or if size is greater than 10 AND gender is coed </td>
      <td align="center">5</td>
    </tr>
    <tr style="background-color:#808000">
      <td>5</td>
      <td>Header is displayed with info submitted (team size and gender) </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>A random NOT coed team is displayed properly when selecting Male or Female as gender </td>
      <td align="center">15</td>
    </tr> 
   	<tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>If selecting "coed" as gender, there is at least one male and one female team member </td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The names are ordered alphabetically as chosen by the user (asc/desc)</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>Team member's images are displayed if corresponding checkbox is checked</td>
      <td align="center">10</td>
    </tr>       
    <tr style="background-color:#FFC0C0">
      <td>10</td>
      <td>Team members are displayed in a two-column table</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>11</td>
      <td>A second form allows users to see the history of generated teams</td>
      <td align="center">15</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>12</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>13</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>   
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>

    </footer>
</html>