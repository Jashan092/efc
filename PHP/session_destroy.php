<?php
    // What is a Session?
    // Use to retrive information across different pages
    // Verify the user login info
    session_start();
    session_unset();
    session_destroy();
    echo "<br> You have been logged out";
    echo "<br>";
?>