<?php
echo 'Associative Arrays';
//  These are called indexed arrays
$arr = array('this','that','what');
echo $arr[0];
echo $arr[1];
echo $arr[2];
// Associative arrays
$favCol = array(
    'Subham' => 'red',
    'rohan' => 'green',
    8 => 'This'
    );
echo '<br>';
echo $favCol['rohan'];
echo '<br>';
echo $favCol[8];

foreach ($favCol as $key => $value) {
    echo $value;
}

foreach ($arr as $value)
    echo '<br> Better Way';
    echo "<br> $value";

?>