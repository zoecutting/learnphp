<?php

// INTEGERS

echo PHP_INT_MAX . '<br />';
echo PHP_INT_MIN . '<br />';
echo PHP_INT_SIZE . '<br />';

// base 10
$x = 10;
echo $x . '<br />';

// hexadeimcal values base 16, prefix 0x
$x = 0x2A;
echo $x . '<br />';

// Binary, prefixed with 0b
$x = 0b101;
echo $x . '<br />';

// overflow max value
$x = PHP_INT_MAX;
echo $x . '<br />';
var_dump($x);

$x = PHP_INT_MAX + 1;
echo $x . '<br />';
var_dump($x);

var_dump(is_int($x));

// Formatting, add underscores to format long numbers for readibility

// $x = 200_000
echo $x . '<br />';

?>
