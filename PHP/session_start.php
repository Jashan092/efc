<?php
    session_start();
    $_SESSION['username'] = "Harry";
    $_SESSION['favCat'] = "Books";
    echo "we have saved you session";
?>