<?php
    // 2.txt    
    echo "Writing and appending files <br>";
    // If file not exist it will create it 
    $fptr = fopen('2.txt',"w");
    // If file already exists it will erase all the data of file 
    // ! you have to give the permissions
    fwrite($fptr,"This is 1 added once by php write function\n");
    // fwrite($fptr,"This is 3 added for testing purpose");\
    // for appending the data of a file
    fclose($fptr);   // don't miss this
    $fptra = fopen('2.txt','a');
    fwrite($fptra,"This is being appended to the file");
    // if you don't want you can't use fclose there coz file is completed and it's automatically closed
?>
