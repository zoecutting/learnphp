<?php

// Variables
// Can only start with letters or underscores, case sensitive

$firstName = 'Zoe';

$firstName = 'Zoey';

echo $firstName;
print '<br />';

// Constants

// Can only start withe letters or underscores, case sensitive
// Convention is to define constants in uppercase
// No $ needed for constants
// Cannot change values for constants
// Defined at runtime
define('FIRST_NAME', 'Zoe');

echo FIRST_NAME;
print '<br />';

// Check that constant has been defined
// Returns a boolean, 1 for true
echo defined('FIRST_NAME');
print '<br />';

// Returns nothing if false

echo defined('LAST_NAME');
print '<br />';

// Second method, defined at compile
const LAST_NAME = 'Cutting';

echo LAST_NAME;
echo '<br />';

// Create constant name by concatenating a variable

$paid = 'PAID';

define('STATUS_' . $paid, $paid);

echo STATUS_PAID;
echo '<br /><br />';

// Predefined/Reserved variables
echo '<a href="https://www.php.net/manual/en/reserved.constants.php" target="_blank">Predefined Constants</a>';
echo '<br />';
echo PHP_VERSION;
echo '<br /><br />';

// Magic constants
echo '<a href="https://www.php.net/manual/en/language.constants.magic.php" target="_blank">Magic constants</a>';
echo '<br />';
echo __FILE__;
echo '<br />';
echo __LINE__;
echo '<br /><br />';

// Variable variables
// Names the variable as the value of foo so, $bar = 'baz'
$foo = 'bar';
$$foo = 'baz';
echo $foo, $bar;
echo '<br />';
echo $foo, $$foo;
echo '<br /><br />';
?>
