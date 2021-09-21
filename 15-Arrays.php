<?php
    // Indexed Array
    $colors = array("Red", "Green", "Blue");
    echo "Colors[0] => $colors[0]" . "\n";
    echo "Colors[2] => $colors[2]" . "\n";
    echo "Colors[1] => $colors[1]" . "\n";

    // Length
    echo count($colors) . "\n";

    // Loop through an Indexed Array
    $len = count($colors);
    for ($i=0; $i < $len; $i++) { 
        echo $colors[$i] . "\n";
    }

    // Associate Array
    $score = array("Bob" => "80", "John" => "70");
    echo $score["Bob"] . "\n";

    // Loop through an Associate Array
    foreach ($score as $key => $value) {
        echo "$key => $value" . "\n";
    }
?>