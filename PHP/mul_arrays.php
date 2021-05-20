<?php
echo '<Ultidimensional arrays<br>';
// The best example of multidimensional arrays is matrices.
$multidim = array(
             array(2,5,7,8),
               array(1,2,3,1),
                array(4,5,0,1)
);
echo var_dump($multidim);   
echo $multidim[0][1];
echo '<br>';

for ($i=0; $i < count($multidim); $i++){
    for ($j=0; $j< count($multidim[$i]);$j++){
        echo $multidim[$i][$j];
        echo ' ';
    }
    echo '<br>';
}

// Three dimensional array 
$trarr = array(
    array(
        array(7,8,9),
        array(10,11,12),
        array(13,14,15)
    ),
    array(
        array(16,17,18),
        array(19,20,21),
        array(22,23,24)
    ),
    array(
        array(25,26,27),
        array(28,29,30),
        array(31,31,33)
        )   
    );
    for ($i=0;$i < count($trarr); $i++){
        for ($j=0;$j<count($trarr[$i]); $j++){
            for ($k=0;$k < count($trarr[$i][$j]); $k++){
                echo $trarr[$i][$j][$k];
                echo ' ';
            }
            echo '<br>';    
        }
    }
?>