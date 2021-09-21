<?php
    $x = 10; // Global Scope
    
    function test() {
        $x = 5; // Local Scope
        echo "The value of x inside test is $x\n";
    }

    test(); // Function Call
    echo "The value of x outside test is $x\n";
?>