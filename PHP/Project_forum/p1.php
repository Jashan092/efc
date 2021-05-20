<?php
$a = "1000";
$b = "+1000";
// PHP automatically converts to number 
if ($a == $b) echo "1";
if ($a === $b) echo "2";    // This is identity operator used it prevents php to convert into numbers or to automatically converts types it checks whole value 
// output 1
echo "<br>";
?>
<?php
$a = "1000";
$b = "+1000";
if ($a != $b) echo "1";
if ($a !== $b) echo "2"; 
// output 2

// AND TRUE if both operands are TRUE
// OR TRUE if either operand is TRUE
// XOR TRUE if one of the two operands is TRUE
// NOT TRUE if the operand is FALSE , or FALSE if the operand is TRUE
?>
<?php
echo '<br>';
$a = 1; $b = 0;
echo ($a AND $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a XOR $b) . "<br>";
echo !$a . "<br>";     // ! and NOT Both are same
// output NULL 1  1 NULL 
?>
<!-- The OR operator can cause unintentional problems in if statements, because the second
operand will not be evaluated if the first is evaluated as TRUE . In Example 4-17, the
function getnext will never be called if $finished has a value of 1 . -->
<?php
$finished = 0;
// if ($finished == 1 OR getnext() == 1) exit;
?>
<?php
// $gn = getnext();
// if ($finished == 1 OR $gn == 1) exit;
?>  
 <!-- INPUT  -->
  <!-- a   b    and  or   xor 
    TRUE TRUE  TRUE TRUE FALSE 
    TRUE FALSE FALSE TRUE TRUE 
    FALSE TRUE FALSE TRUE TRUE 
    FALSE FALSE FALSE FALSE FALSE 
-->
<!-- conditionals -->
<!-- There are three types of non-looping conditionals: the if statement, the switch state‐
ment, and the ? operator. By non-looping, I mean that the actions initiated by the state‐
ment take place and program flow then moves on, whereas looping conditionals (which
we’ll get to shortly) execute code over and over until a condition has been met. -->

<?php
$page = "News";
switch ($page)
{
default:
    echo "hi";
    break;
case "Home":
echo "You";
break;
case "About":
echo "You";
break;
case "News":
echo "You";
break;
case "Login":
echo "You";
break;
case "Links":
echo "You";
break;
}
?>

<?php
$page = "Home";
switch ($page):
case "Home":
echo "You selected Home";
break;
// etc...
case "Links":
echo "You selected Links";
break;
endswitch;
?>


<?php
echo "<br> <br>";
$fuel = 2;
// ? ---> if 
// : ---> else 
echo  $fuel == 1 ? "YOU have 1 unit of fuel" : "Holy dakamule";
echo "<br>";
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";
?>

<?php
echo "<br>";
$enough = $fuel <= 1 ? FALSE : TRUE;
$new = 1;
$saved = 1;
$saved = $saved >= $new ? $saved : $new;
?>

<!-- <?php
echo "<br>";
$fuel = 10;
while ($fuel > 1)
{
// Keep driving ...
echo "There's enough fuel";
}
?> -->


<?php
$count = 1;
do {
echo "$count times 12 is " . $count * 12;
echo "<br>";
} while (++$count <= 12);
?>


<?php
echo "<br>";
for ($count = 1 ; $count <= 12 ; ++$count)
echo "$count times 12 is " . $count * 12 . "<br>";
?>

• An initialization expression
• A condition expression
• A modification expression

<?php
for ($i = 1, $j = 1 ; $i + $j < 10 ; $i++ , $j++)
{
// ...
}
?>

<!-- $i = 1, $j = 1  // Initialize $i and $j
$i + $j < 10  // Terminating condition
$i++ , $j++  // Modify $i and $j at the end of each iteration

The main thing to take from this example is that you must separate the three parameter
sections with semicolons, not commas (which should be used only to separate state‐
ments within a parameter section). -->
<!-- So, when is a while statement more appropriate than a for statement? When your
condition doesn’t depend on a simple, regular change to a variable. For instance, if you
want to check for some special input or error and end the loop when it occurs, use a
while statement. bro -->

<?php
$fp =  fopen("file.txt,'wb");
for ($j = 0; $j < 100 ; ++$j){
    $written = fwrite($fp,'data');
    if ($written == FALSE) break;
}
fclose($fp);
?>

<?php
$j = 10;
while ($j > −10)
{
$j--;
if ($j == 0) continue;
echo (10 / $j) . "<br>";
}
?>
