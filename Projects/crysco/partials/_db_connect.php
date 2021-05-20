<?php

    $connection = mysqli_connect('localhost','root','','');
    if (!$connection){
        echo "Error connecting to database";
    }else{
        echo "conencted to database";
    }
    

?>