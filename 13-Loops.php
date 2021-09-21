<?php
    // While Loop
    $x = 1;
    while ($x <= 5) {
        echo $x . "\n";
        $x++; 
    }

    echo "\n";

    // Do-While Loop
    $x = 1;
    do {
        echo $x . "\n";
        $x++;
    } while ($x <= 5);

    echo "\n";

    // For Loop
    for ($i = 1; $i <= 5; $i++) { 
        echo $i . "\n";
    }

    echo "\n";

    // For-Each Loop
    $cars = ["volvo", "bmw", "honda", "ford"];
    foreach($cars as $car) {
        echo $car . "\n";
    }
?>