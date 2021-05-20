<!-- Find the number of records  -->
$sql = 'select * from "phptrip"';
$result = mysqli_query($conn,$sql);
echo mysqli_num_rows($result);  return the no. of rows 
$num = mysqli_num_rows($result);  return the no. of rows 

// Display the rows returned by the sql query.

if ($num> 0){
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);   ---> It display the first row.
    echo '<br>';
}
for displaying next 
if ($num> 0){
    $row = mysqli_fetch_assoc($result);
    echo var_dump($row);   ---> It display the first row.
    echo '<br>';
}
it fetch the record one by one.
// we can use loops for reducing code 

while ($row = mysqli_fetch_assoc[$result]){
    echo var_dump($row);
    echo '<br>';
}