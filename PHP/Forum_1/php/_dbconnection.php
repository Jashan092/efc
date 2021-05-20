<?php
ob_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Forum';
$connec = mysqli_connect($servername,$username,$password,$dbname);
// if ($connec){
//     echo "Connected with database ".$dbname;
// }
// else{
//     echo "Error connecting with database ".$dbname;
// }
?>