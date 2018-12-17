<?php
session_start();

include '../inc/dbConnection.php';
$dbConn = startConnection("c9");



function check(){
     if(isset($_GET['submit'])){
         global $dbConn;
          $username = $_GET['username'];
         $password = $_GET['password'];

            $sql = "SELECT * FROM fe_login
                 WHERE username = :username 
                 AND  password = :password ";  
                 
    $np = array();
    $np[':username'] = $username;
    $np[':password'] = $password;

    $stmt = $dbConn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC); //we're expecting just one record
        
        
    if (empty($record)) {
        
    echo "Wrong Credentials!  <br>" ;
    
     $sql = "UPDATE fe_login SET 'failedAttempts' = failedAttempts + 1
             WHERE username = " . $record['username'];
  
    }
    else {
           if($record['username'] == "jlopez" || $record['username'] == "mgriffin"){
               echo "This account is locked";
           }
           else{
           $_SESSION['Name'] = $record['username'];
           header('Location: welcome.php'); //redirects to another program
           }
     }
 
  }
}
function display() {
     global $dbConn;
        $sql = "SELECT * FROM fe_login WHERE 1 ORDER BY studentId";
            
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple recor
                echo '<h2>"fe_login" Table Data</h2>';

         foreach ($records as $record){ 
        echo "
      
        <table border='1'>
            <tr>
                <th>studenId</th>
                <th>username</th>
                <th>failedAttempts</th>
                <th>daysLeftPwdChange</th>
            </tr>
            <tr>
                <td>" .$record['studentId'] . "</td>
                <td>" .$record['username'] . "</td>
                <td>" .$record['failedAttempts'] . "</td>
                <td>" .$record['daysLeftPwdChange'] . "</td>
            </tr>
        </table>";
        }

}
function display2(){
    global $dbConn;
        $sql = "SELECT * FROM fe_lock WHERE 1 ORDER BY studentId";
         $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC); //we're expecting multiple recor

         foreach ($records as $record){ 
             echo $record['studentId']. " ";
         }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Program 1</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script>
            $("document").ready(function(){
                $("#user").change(function() {
                     $.ajax({
                                type: "GET",
                                url: "",
                                data: { "user":$("#user") },
                                success: function(data, status) {
                                  $("#time").html("do some");
                                },
                                complete: function(data, status) { //optional, used for debugging purposes
                                     //alert(status);
                                    // alert(data);
                                       
                                }
            
                            }); //ajax
                        
                    });
                    });
                   
       
        </script>
    </head>
    <body id="login">
        <h1>Login</h1>
        
        <div id="info">
        <form>
            <input type="text" name="username" id="user" placeholder="Username"/><br />
            <input type="password" name="password" placeholder="Password" /><br><br>
            <input type="submit" name="submit" value="Login" />
        </form>
        <label id="time"></label>
        </div>
        <br/>
        <?= check(); ?>
        <br/>
        <?= display(); ?>
    </body>
    <br/>
         Locked Student Ids:
        <?= display2();?>
    <br/><br/>
    
    
    
      <!--Ruby -->
    
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
     <tr style="background-color: green">
      <td>1</td>
      <td>The data from the fe_login table is displayed below the Login form  </td>
      <td width="20" align="center">10</td>
    </tr>
     <tr style="background-color:green">
      <td>2</td>
      <td>The locked Student ids (from the fe_lock table) are displayed  </td>
      <td width="20" align="center">5</td>
    </tr>   
     <tr style="background-color:green">
      <td>3</td>
      <td>The welcome.php file is shown when the user enters the right credentials AND the account is NOT locked.</td>
      <td width="20" align="center">5</td>
    </tr>    
     <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>(AJAX) After typing the username, the number of days left to change the password is shown in red if the value of daysLeftPwdChange is between 1 and 15.
      	Hint: Use a "change" jQuery event, instead of "click"</td>
      <td width="20" align="center">10</td>
    </tr>     
     <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>(AJAX) After typing the username, "You must change your Password NOW" is displayed in red if the value of daysLeftPwdChange is 0</td>
      <td width="20" align="center">10</td>
    </tr>      
     <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>If the account is NOT locked, the "failedAttempts" field is reset to 0 when the user enters the right credentials.</td>
      <td width="20" align="center">15</td>
    </tr>      
    <tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>The "failedAttempts" field is increased by 1 when entering the wrong password</td>
      <td width="20" align="center">15</td>
    </tr> 
   <tr style="background-color:#FFC0C0">
	 <td>8</td>
	 <td>The message "wrong credentials" is displayed when entering the wrong username/password</td>
	 <td width="20" align="center">5</td>
	</tr>     
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>A new record is inserted in the "fe_lock" table when the "failedAttempts" field has a value of 3.</td>
      <td width="20" align="center">15</td>
    </tr>  
     <tr style="background-color:green">
      <td>10</td>
      <td>The message "This account is locked" is displayed when the account is locked and entering the right username/password</td>
      <td width="20" align="center">10</td>
    </tr> 
     <tr style="background-color:green">
      <td>11</td>
      <td>This rubric is properly included AND UPDATED</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center">&nbsp;</td>
    </tr> 
  </tbody></table>
</html>