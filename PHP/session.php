<?php
    // What is a Session?
    // Use to retrive information across different pages
    // Verify the user login info
    session_start();
    $_SESSION['username'] = "Jashan";
    $_SESSION['favCat'] = 'Books'; 
    echo "WE have saved your data"
?>