
<?php
include "login.html";
//if username != user_1 || username user_2
//if password != s3cr3t
$user = $_GET["userName"];
$pass = $_GET["password"];

if($user != "user_1" || $user != "user_2"){
    echo "The values you entered were incorrect" . "<a href= 'login.php'> Retry </a>";
}

?>