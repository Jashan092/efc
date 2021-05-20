<?php

$file = fopen('1.txt',"r");
while ($a = fgetc($file)){
    echo $a;
    if ($a == '.'){
        break;
    }
}
?>