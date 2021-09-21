<?php
    $x = 10;

    function test() {
        global $x; // Global Keyword
        $x = 20;
        echo "The value of x inside test is $x\n";
    }

    test();
    echo "The value of x outside test is $x\n";
?>