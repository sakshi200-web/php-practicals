<!DOCTYPE html>
<html>
    <head>
        <title>PHP Loops Example</title>
</head>
<body>
    <h2>Numbers from 1 to 20 using for Loop:</h2>
    <?php
    for($i = 1; $i <= 20; $i++) {
        echo $i . "";
    }
    ?>
   <h2>Numbers from 1 to 20 using while Loop:</h2>
   <?php
   $i = 1;
   while($i <= 20){
    echo $i ."";
    $i++;
   } 
   ?>
   <h2>Numbers from 1 to 20 using Do-while Loop:</h2>
   <?php
    $i = 1;
   do {
    echo $i ."";
    $i++;
   } while ($i <= 20);
   ?>
   </body>
</html>
