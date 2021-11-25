<?php

// Dynamically typed or weakly typed language i.e. not required to define the type of your variable and the type can change

// Data types & typecasting

# 4 Scalar types
    # bool - true/false
    $completed = true;
    # int - whole numbers 1,2,3,-5
    $score = 42;
    # float/double - decimal number 1.5,0.1,-15.3
    $price = 1.99;
    # string - "Zoe Cutting", "Hello world"
    $greeting = 'Hello Zoe';

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $price . '<br />';
    echo $greeting . '<br />';

    echo gettype($completed) . '<br />';
    echo gettype($score) . '<br />';
    echo gettype($price) . '<br />';
    echo gettype($greeting) . '<br />';

    var_dump($completed);
    var_dump($score);
    var_dump($price);
    var_dump($greeting);

    echo '<br /><br />';

# 4 compound types
    # array
    $companies = [1, 2, 3, 0.5, 'a', 'b', true];
    print_r($companies);
    # object
    # callable
    # iterable

# 2 special types
    # resource
    # null

// Typecasting

$x = (int)'5';

var_dump($x);

?>
