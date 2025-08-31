<?php
// Method 1: Using step +2
echo "<h3>Method 1: Using step +2</h3>";
for($i = 2; $i < 100; $i += 2) {
    echo $i . "";
}
echo "<br><br>";

// Method 2: Using if conditon 
echo "<h3>Method 2: Using if condition</h3>";
for($i = 1; $i <= 100; $i++){
    if ($i % 2 == 0){
        echo $i . "";
    }

}
?>