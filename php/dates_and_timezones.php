<?php

// Date and time

// Number of seconds since 19700101
echo time().  '<br />';;

// Add 5 days to current time

$currentTime = time();

echo $currentTime .  '<br />';

// Add 5 days
echo $currentTime + 5 * 24 * 60 * 60 .  '<br />';
// Subtract 1 day
echo $currentTime - 60 * 60 * 24 .  '<br />';

// Time zone in settings
echo date('d/m/y g:ia') . '<br />';
echo date('d/m/y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';
echo date('d/m/y g:ia', $currentTime - 60 * 60 * 24) . '<br />';

// Set new timezone

date_default_timezone_set('Europe/Athens');
echo date('d/m/y g:ia') . '<br />';
echo date('d/m/y g:ia', $currentTime + 5 * 24 * 60 * 60) . '<br />';
echo date('d/m/y g:ia', $currentTime - 60 * 60 * 24) . '<br />';

echo date_default_timezone_get() . '<br />';

echo date('m/d/y g:ia', mktime(0, 0, 0, 4, 10, null)) . '<br />';

echo date('m/d/y g:ia', strtotime('2021-12-15 07:00:00')) . '<br />';
echo date('m/d/y g:ia', strtotime('tomorrow')) . '<br />';
echo date('m/d/y g:ia', strtotime('first day of april')) . '<br />';

$date = date('m/d/y g:ia', strtotime('first day of april'));
echo '<pre>';
print_r(date_parse($date));
echo '</pre>';
?>
