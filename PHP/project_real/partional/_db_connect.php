<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users2006';

$connection = mysqli_connect($servername,$username,$password,$dbname);
if (!$connection){
    echo "<br> Error while connecting to the database <br>", mysqli_error($connection);
}
// else{
    // echo "connect successfuly";
// }
?>