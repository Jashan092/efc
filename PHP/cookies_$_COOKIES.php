<?php
    echo "Welcome to the world of cookies <br>";
    // Cookies | Sessions
    // Syntax to set a cookie

    // setcookie(name,value,expiry date,domain_where_you_want_to_use)
    setcookie("category","Books", time() + 86400, "/");
    echo "The cookie has been set";
?>