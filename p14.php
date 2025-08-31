<!DOCTYPE html>
<html>
    <head>
        <title>PHP Short Echo Example </title>
</head>
<body>
    <?php
    //Define three numbers
    $a = 10;
    $b = 20;
    $c = 30;

    //calculate sum
    $sum = $a + $b + $c;
    ?>
    <h2>First Number: <?= $a ?></h2>
    <h2>Second Number: <?= $b ?></h2>
    <h2>Third Number: <?= $c ?></h2>
    <h2>Sum: <?= $sum ?></h2>
    </body>
    </html>