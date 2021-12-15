<?php

function foo(int $x, int $y) {
    return $x * $y;
}
echo foo(5.0, '10') . '<br />';


// declare(strict_types=1)

function bar(int $x, int $y) {
    return $x * $y;
}
echo bar(5.0, '10') . '<br />';

// Define default values
function hoo(int $x = 10, int $y = 10) {
    return $x * $y;
}
echo hoo() . '<br />';

// User amersand to pass in reference to the variable rather than the value
function goo(int &$x, int $y) {
    if ($x % 2 === 0) {
        $x /= 2;
    }
    return $x * $y;
}

$a = 6;
$b = 7;

echo goo($a, $b);
echo '<br />';

var_dump($a, $b);
echo '<br />';

// Variadic functions except a variable number of arguments
// Use splat (unpacking) (...) declaration and arguments will be set in an array
function sum(...$numbers): int {
    return array_sum($numbers);
}

echo sum(10, 5, 2, 14, 9, 45) .'<br />';



?>
