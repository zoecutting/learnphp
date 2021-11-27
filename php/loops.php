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

    echo '<br />';
// Alternate syntax
    $i = 0;
    while ($i <= 15) :
        if ($i % 2 === 0) {
            $i++;
            continue;
        }
        echo $i++ . ',';
    endwhile;
    echo '<br />';

// do-while
// Guarantees at least one interation of the loop before the while condition is reached
    $i = 0;
    do {
      echo $i++;
    } while ($i <= 15);

    echo '<br />';

// for
    for ($i = 0; $i < 15; $i++) {
       echo $i;
    }
    echo '<br />';

    for ($i = 0; print $i, $i < 15; $i++);
    echo '<br />';

// foreach
// Iterate over arrays or objects
    $programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];

    foreach ($programmingLanguages as $language) {
        echo $language . '<br />';
    }

    $programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];
    foreach ($programmingLanguages as $key => $language) {
        echo $key . ' ' .$language . '<br />';
    }

// Use an ampersand to access by reference and change values in the array
    $programmingLanguages = ['php', 'java', 'c++', 'go', 'rust'];
    foreach ($programmingLanguages as $key => &$language) {
       $language = 'php';
    }
    print_r($programmingLanguages);
// last index value does not get destroyed after the last loop, use unset to destroy
    unset($language);

    $user = [
        'name' => 'Zoe',
        'email' => 'zoecutting@gmail.com',
        'skills' => ['php', 'jquery', 'sql'],
    ];

    foreach($user as $key => $value) {
        echo $key . ': ' . json_encode($value) . '<br />';
    }
?>

