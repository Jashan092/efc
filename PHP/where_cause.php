<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Alpha";
// Create  a connection 
$conn = mysqli_connect($servername,$username,$password);
// echo "Connection was successful";
if ($conn){
    echo 'Connected to the Database';
}
else {
    echo 'Error connecting to the database';
}
?>
