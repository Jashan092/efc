<?php
echo strrev(" .dlrow olleH"); // Reverse string
echo str_repeat("Hip ", 2);
// Repeat string
echo "<pre>";
print("         Hello world          ");
echo "</pre>";
echo strtoupper("hooray!");
// String to uppercase

// function for converting first letter of given senetence to uppecase and remaining all lowercase.

function Deco($sen){
    echo "<br>";
    $a = strtolower($sen);
    echo ucfirst($a);
}
Deco("JASHAN Is A GOOD bOy");
if (function_exists("array_combine"))
{
echo "Function exists";
}
else
{
echo "Function does not exist - better write our own";
}
?>