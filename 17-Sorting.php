<?php
    $array = [5, 2, 7, 1, 3];
    sort($array); // sort function

    $len = count($array);
    for ($i=0; $i<$len; $i++) {
        echo "$array[$i] ";
    }
?>