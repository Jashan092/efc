<?php

$name = 'Jashan';
echo $name;
echo '<br>';

// It will give the length
echo strlen($name);
// this is the . operator used for concatenating 2 or more strings.
echo 'The length of the string is '. strlen($name);
echo '<br>';
echo 'This function show the word count in '. str_word_count($name);
echo '<br>';
echo 'This function reverse the string '.strrev($name);
echo '<br>';
// It index the position of the string start from 0
echo 'for search the string'.strpos($name,'a');
echo '<br>';
echo 'This will replace the string '.str_replace('Jashan','JASHAN',$name);
echo '<br>';
echo 'This will repeat the string'.str_repeat($name,9);
echo '<br>';
// You can use <pre></pre> tag to print directly as written.
echo '<pre>';
$tab = '       This is String      ';
// remove space from right 
echo 'For trimming the string'.rtrim($tab);
// remove  space from left
echo 'For trimming the string'.ltrim($tab);
echo '</pre>';
?>