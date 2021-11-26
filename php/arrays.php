<?php

// ARRAYS

$programmingLanguages = ['PHP', 'Java', 'Python'];

echo $programmingLanguages[0] . '<br />';
echo $programmingLanguages[1] . '<br />';
echo $programmingLanguages[2] . '<br />';

// isset() to check for index
var_dump(isset($programmingLanguages[3]));

$programmingLanguages[1] = 'C++';
echo $programmingLanguages[1] . '<br />';
var_dump($programmingLanguages);
echo '<pre>';
    print_r($programmingLanguages);
echo '</pre>';

echo count($programmingLanguages);

$programmingLanguages[] = 'C++';
echo '<pre>';
    print_r($programmingLanguages);
echo '</pre>';

array_push($programmingLanguages, 'C++', 'C', 'Go');
echo '<pre>';
    print_r($programmingLanguages);
echo '</pre>';

// ASSOCIATIVE ARRAYS

$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

echo '<pre>';
    print_r($programmingLanguages);
echo '</pre>';

echo $programmingLanguages['php'];

$newLang = 'go';
$programmingLanguages[$newLang] = '1.15';
echo '<pre>';
    print_r($programmingLanguages);
echo '</pre>';

// MULTI DIMENSIONAL ARRAYS

$programmingLanguages = [
    'php' => [
        'website'         => 'www.php.net',
        'isOpenSource'    => true,
        'versions'        => [
            'version' => ['8','7.4']
        ]
    ],
    'python' => [
        'website'         => 'www.python.org',
        'isOpenSource'    => true,
        'versions'        => [
            'version' => ['1','2']
        ]
    ]
];

echo '<pre>';
    echo $programmingLanguages['php']['versions']['version'][1];
echo '</pre>';

// Following exmaple will only have one index because the previous indices all resolve to 1 and overwrite the previous value
$array = [
    true    => 'a',
    1       => 'b',
    '1'     => 'c',
    1.8     => 'd'
];

print_r($array);

// Remove elements from array
$array = ['a', 'b', 'c', 'd'];

// Removes and returns last element of the array
unset($array[2]);
print_r($array) . '<br />';
echo array_pop($array) . '<br />';
// Removes and returns last element of the array, reindexes array
echo array_shift($array) . '<br />';

// Does not reindex array
unset($array[1]);
print_r($array . '<br /><br />');

// CASTING
$x = 5;

var_dump((array) $x);
echo '<br /><br />';

// Check for value
$array = ['a' => 1 , 'b' => null];
var_dump(array_key_exists('b', $array));
var_dump(isset($array['b']));


?>
