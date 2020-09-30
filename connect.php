<?php
 
$servername = "localhost";  //replace your servername
$username = "denas";   //replace your username
$password = "qwepoi";        //replace your password
$dbname = "crud";    //replace your database name

//Try connection
try {
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
} catch (Exception $e) {
    
    echo $e;
}
?>