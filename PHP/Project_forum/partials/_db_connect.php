<?php
ob_start();
    // Script to connect to the database.
    $severname = "localhost";
    $username = 'root';
    $password = '';
    $dbname = 'idiscuss';
    $conn = mysqli_connect($severname,$username,$password,$dbname);
    if ($conn){
        // echo "connected db ss";
    }
ob_get_flush();
?>