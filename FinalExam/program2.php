<?php
session_start();
include '../inc/dbConnection.php';
$dbConn = startConnection("c9");


function displayInfo() {
    global $dbConn;
        $sql = "SELECT * FROM fe_lock
                INNER JOIN  fe_login
                ON fe_login.studentId = fe_lock.studentId
                WHERE 1";
            
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

         foreach ($records as $record){ 
             $_SESSION['failedAttempts'] = $record['failedAttempts'];
             $attempts = $_SESSION['failedAttempts'];
             
        echo "
        <div >
        <table border='1'>
            <tr>
                <th>username</th>
                <th>failedAttempts</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>" .$record['username'] . "</td>
                <td>" .$record['failedAttempts'] . "</td>
                <td><form><input type='submit' value='unlock' /></form></td>
            </tr>
        </table>
        </div>";
        }

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Program 2</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <h1>Unlocking Accounts</h1>
        <?= displayInfo(); ?>
        <br>
    Note: For demo purposes, accounts "jlopez" and "mgriffin" aren't really unlocked.<br>
        

    </body>
     
      <table border="1" width="600" id="rubric">
			<tbody>
				<tr>
					<th>#</th><th>Task Description</th><th>Points</th>
				</tr>
				<tr style="background-color:green">
					<td>1</td>
					<td>The list of locked accounts is properly displayed, including the username and failed attempts.</td>
					<td width="20" align="center">15</td>
				</tr>
				<tr style="background-color:#99E999">
					<td>2</td>
					<td>When clicking on any of the "unlock" buttons a JavaScript function is executed (any function). </td>
					<td width="20" align="center">10</td>
				</tr>
				<tr style="background-color:#99E999">
					<td>3</td>
					<td>(AJAX) When clicking on any of the "unlock" buttons, an AJAX function deletes properly the record from the fe_lock table.</td>
					<td width="20" align="center">15</td>
				</tr>
				<tr style="background-color:#99E999">
					<td>3</td>
					<td>(AJAX) When clicking on the "unlock" button, the AJAX function updates the value of the failedAtttempts field back to 0</td>
					<td width="20" align="center">15</td>
				</tr>
				<tr style="background-color:#99E999">
					<td>4</td>
					<td>When clicking on the "Unlock" button, the button is disabled and its label changes to "Account Successfully Unlocked" 
					</td>
					<td width="20" align="center">10</td>
				</tr>
				<tr style="background-color:green">
					<td>5</td>
					<td>This rubric is properly included AND UPDATED</td>
					<td width="20" align="center">2</td>
				</tr>
				<tr>
					<td></td>
					<td>T O T A L </td>
					<td width="20" align="center">&nbsp;</td>
				</tr>
			</tbody>
		</table>  
</html>