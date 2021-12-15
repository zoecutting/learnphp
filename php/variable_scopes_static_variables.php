<?php

// Variable scope

// variable (global) scope
$x = 5;

// super globals scope
$GLOBALS['x'] = 10;
function foo() {
    echo $GLOBALS['x'];
}

foo();


// Static keyword - use to cache variables
?>
