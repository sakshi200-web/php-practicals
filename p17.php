<?php
echo "<h3>Method 1: Using step +2</h3>";
for($i = 21; $i < 80; $i += 2) {
    echo $i . "";
}
echo "<br><br>";
echo "<h3>Method 2: Using if condition</h3>";
for($i = 20; $i <= 80; $i++){
    if ($i % 2 != 0){
        echo $i . "";
    }

}
?>