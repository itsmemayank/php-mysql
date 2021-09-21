<?php
    // Global Variable
    $x = 5;
    $y = 4;

    function add() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    add();
    echo $z . "\n";

    // Superglobal
    echo $_SERVER['PHP_SELF'] . "\n";
    echo $_SERVER['SERVER_NAME'] . "\n";
?>