<?php

// LOOPS

// while
    $i = 0;
    while ($i <= 15) {
        if ($i % 2 === 0) {
            $i++;
            continue;
        }
        echo $i++ . ',';
    }
// Alternate syntax
    $i = 0;
    while ($i <= 15) :
        if ($i % 2 === 0) {
            $i++;
            continue;
        }
        echo $i++ . ',';
    endwhile;

// do-while



// for

// foreach
?>
