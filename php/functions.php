<?php

// Put return type of function after name with a colon when not using strict types

function foo(): int {
    return '1';
}

var_dump(foo());

// Can return null or a value using nullable types, add ? before type hint

function bar(): ?int {
    return null;
}

var_dump(bar());

// in php8 can specificy multiple return types with pipe delimeter or use "mixed"

// function hoo(): int|float {
//     return 1.5;
// }

// var_dump(hoo());

?>
