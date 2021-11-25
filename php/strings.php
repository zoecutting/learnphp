<?php

// STRINGS

$firstName = 'Zoe';
echo $firstName . '<br />';

// Double quotes can contain variables
// All valid syntax for variable output
$lastName = "$firstName Cutting";
echo $lastName . '<br />';

$lastName = "${firstName} Cutting";
echo $lastName . '<br />';

$lastName = "{$firstName} Cutting";
echo $lastName . '<br />';

// ACCESS STRING ELEMENTS

$firstName = 'Zoe';
$lastName = 'Cutting';
$name = $firstName . ' ' . $lastName;

echo $name . '<br />';

echo $name[0];
echo $name[1];
echo $name[2];
echo $name[3];
echo $name[4];
echo $name[5];
echo $name[6];
echo $name[7];
echo $name[8];
echo $name[9];
echo $name[10];
echo '<br />';

echo $name[-1] . '<br />';

$name[1] = "A";

echo $name . '<br /><br />';

var_dump($name);

echo '<br /><br />';

$x = 1;
// both ways to deal with long and/or complex strings;
// Heredoc, treats strings like they are envlosed in "", therefore heredoc allows variables
$text = <<<TEXT
Line $x
Line two
Line three
Line four
TEXT;
echo nl2br($text);
echo '<br /><br />';

// Nowdoc, treats strings like they are enclosed in '', therefore variables not allowed
$text = <<<'TEXT'
Line $x
Line two
Line three
Line four
TEXT;

echo nl2br($text);


?>
