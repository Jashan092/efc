<!-- THere are 2 ways: -->
    <!-- 1. PDO  -->
    <!-- 2. MySqli extension -->
<?php

// connecting to the MySql database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Alpha";
// Create  a connection 
$conn = mysqli_connect($servername,$username,$password);
// Creating a database
// $sql = 'CREATE DATABASE Jashan7';
// $result1 = mysqli_query($conn,$sql);
// // Check for the database creation
// if($result1){
//     echo 'The Db was created successfuly';
// }
// else{
//     echo "DB was not created successfuly error ---> ". mysqli_error($conn). "<br>";
// }
// echo 'The result is ' ;
// echo var_dump($result1). '<br>';
// // for deleting the database
// $dsql = 'DROP DATABASE Jashan7';
// mysqli_query($conn,$dsql);
// for creating table 
$utJ = 'USE Jashan72';
mysqli_query($conn,$utJ);
// $cts = 'CREATE TABLE chucky(id int auto_increment,name not null default "unnamed",PRIMARY KEY(id);';
// $cts = 'CREATE TABLE `Jashan72`.`GANG` ( `id` INT(10) NOT NULL , `name` VARCHAR(55) NOT NULL ) ENGINE = InnoDB;';
$cts = 'CREATE TABLE "Jashan72"."Squad" ("id" INT NOT NULL DEFAULT 0, "name" VARCHAR(55) NOT NULL default "UNnamed"';

mysqli_query($conn,$cts);
if (!$conn){
    die('We got trouble in connecting'. mysqli_connect_error());
}
else{
    echo "Connection was successful";
}


?>