<?php
    function test() {
        // holds the value
        // till the end of the php script
        static $x = 10; 
        echo "The value of x = $x\n";
        $x++;
    }

    // Function Call
    test(); 
    test(); 
    test();
?>