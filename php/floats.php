<?php

// FLOATS

echo PHP_FLOAT_MAX. '<br />';
echo PHP_FLOAT_MIN. '<br />';

$x = 13.5;
echo $x . '<br />';

$x = 13.5e3;
echo $x . '<br />';

$x = 13.5e-3;
echo $x . '<br />';

var_dump($x);


$x = floor((0.7 + 0.1) * 10);

// 7.999999 = 7 with floor()

echo $x. '<br />';

$x = PHP_FLOAT_MAX * 2;

var_dump(is_finite($x));
var_dump(is_infinite($x));
var_dump(is_nan($x));



// INF

?>

<!-- https://floating-point-gui.de/ -->
