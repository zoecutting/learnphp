<?php

// BOOLEANS

$isComplete = true;
$isComplete = 0;
$isComplete = null;
$isComplete = [];

// integers 0 -0 = false
// floats 0.0 -0.0 = false
// '' = false
// '0' = false
//  [] = false
//  null = false

is_bool($isComplete);

if ($isComplete) {
    echo 'true';
} else {
    echo 'false';
}
?>
