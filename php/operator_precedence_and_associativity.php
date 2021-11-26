<?php

// Operator precedence and associativity
// https://www.php.net/manual/en/language.operators.precedence.php

// Multiplication done first because the operator has higher precedence than the addition operator
$x = 5 + 3 * 5;
echo $x . '<br />'; // 20

$x = (5 + 3) * 5;
echo $x . '<br />'; // 40

// Associativity, if operators have the same precedence then the associativity determines which direction the
// expression is evaluted (see table)

?>
