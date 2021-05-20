<?php
    // What is a Session?
    // Use to retrive information across different pages
    // Verify the user login info
    session_start();
    if (isset($_SESSION['username'])){
        echo "Welcome ".$_SESSION['username'];
        echo  "<br> Your favorate category is ", $_SESSION['favCat']; 
    }
    else{
        echo "Please Login First";
    }
    // echo "<br> We have saved your session";
    echo "<br>";
?>