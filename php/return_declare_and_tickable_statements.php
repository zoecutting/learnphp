<?php


// RETURN / DECLARE
// Using return without a value returns null

echo sum(1, 2);

function sum(int $x, int $y) {
    return $x + $y;
}

// DECLARE - TICKS

function onTick() {
    echo 'Tick<br />';
}

register_tick_function('onTick');

declare(ticks = 1);

$i = 0;
$length = 10;

while ($i < $length) {
    echo $i++ .  '<br />';
}

// DECLARE - ENCODING

declare(strict_types=1);

function sum(int $x, int $y) {
    return $x + $y;
}

echo sum('5', 10);

?>


