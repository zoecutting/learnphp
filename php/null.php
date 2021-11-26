<?php

// NULL
// null constant, case insensitive
$x = null;
echo $x;
var_dump($x);
var_dump(is_null($x));

// not defined
var_dump(is_null($y));

// unset variable
$x = 123;
var_dump($x);
unset($x);
var_dump($x);

// when null is cast to a string the string is empty

$x = null;
var_dump((string) $x);
var_dump((bool) $x);
var_dump((array) $x);

?>
