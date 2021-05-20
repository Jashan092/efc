<?php
session_start();
echo "welcome ".$_SESSION['username'];
echo "<br>";
echo "Your favorate category is ". $_SESSION['favCat'];
echo "<br>";
?>