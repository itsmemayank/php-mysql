<?php
    // Without Arguments
    function func1() {
        echo "Without Arguments" . "\n";
    }
    func1(); // Function Call

    // With Arguments
    function func2($val) {
        echo "With Arguments => $val" . "\n";
    }
    func2("PHP"); // Function Call

    // With Return
    function func3($val) {
        return $val;
    }
    $result = func3("John");
    echo "Hello, $result";
?>