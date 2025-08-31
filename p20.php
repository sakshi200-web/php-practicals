<?php
// Indexed Array (size 10)
$numbers = array (10, 20, 30, 40, 50, 60, 70, 80, 90, 100);

// Printing using index number
echo "<h3> Indexed Array Elements: </h3>";
for ($i = 0; $i < 10; $i++){
    echo "Element at index $i =" . 
    $numbers[$i] . "<br>";
}
?>