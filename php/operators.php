<?php

// OPERATORS

// Arithmetic operators ( + - * / % ** )
$x = 10;
$y = 2;

var_dump($x + $y);
echo '<br />';
var_dump($x - $y);
echo '<br />';
var_dump($x * $y);
echo '<br />';
// Cast to integer, to mod floats use fmod()
var_dump($x / $y);
echo '<br />';
var_dump($x % $y);
echo '<br />';
var_dump($x ** $y);
echo '<br />';

// Assignment operators ( = += -= *= /= %= ** =)
$x = 5;
// Assign value to multiple vars
$x = $y = 10;
var_dump($x, $y);
echo '<br />';

$x = 10;
$x = $x * 3;
var_dump($x);
echo '<br />';
//Shorthand
$x = 10;
$x *= 3;
var_dump($x);
echo '<br />';

// String operators ( . .=)
$x = 'Hello';
// $x = $x . 'World';
// Shorthand
$x .= 'World';
echo $x;

// Comparison operators ( == === != <> !== < > <= => <==> ?? ?: )
$x = 5;
$y = 3;

var_dump($x == $y);
// Strict comparison checks datatype
$x = 5;
$y = '3';
var_dump($x === $y);
echo '<br />';

$x = 'Hello world';
$y = strpos($x, 'H');

if ($y === false) {
    echo 'H not found';
} else {
    echo 'H found at index ' . $y;
}
echo '<br />';
// Ternary operators expect 3 values
$result = $y === false ? 'H not found' : 'H found at index ' . $y;
echo $result;
echo '<br />';

$x = null;
$y = $x ?? 'hello';
var_dump($y);

$y = $x ?? 'hello';
var_dump($y);
echo '<br />';

// Error control operator ( @ )
// e.g. Suppress error for missing file

// $x @file('foo.txt');

// Increment/Decrement operators ( ++ --)
$x = 5;
echo $x++ .'<br />';
echo $x-- .'<br />';
echo ++$x .'<br />';
echo --$x .'<br />';

// logical operators ( && || ! and or xor)
$x = true;
$y = false;

var_dump($x && $y); // false
$x = true;
$y = true;
var_dump($x && $y); // true
$y = false;
var_dump($x || $y); // true
echo '<br />';

// Bitwise operators, binary
$x = 6;
$y = 3;

var_dump($x & $y); //true
echo '<br />';

// Array operators
// overwrites if index doesn't already exist in destination
$x = ['a', 'b', 'c', 'd'];
$y = ['e', 'f', 'g', 'h'];
$z = $x + $y;
print_r($z);
echo '<br />';

$x = ['a', 'b', 'c', 'd'];
$y = ['e', 'f', 'g', 'h', 'i', 'j'];
$z = $x + $y;
print_r($z);
echo '<br />';


?>
