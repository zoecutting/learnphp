<?php

// Switch statements

$paymentStatus = 'declined';

switch ($paymentStatus) {
    case 'paid':
        echo 'Paid';
        break;

    // Leave out break so execution continues and acts as OR statement
    case 'rejected':
    case 'declined':
        echo 'declined';
        break;

    default:
        echo 'Unknown';
        break;
}


// Introduced in php 8

// $paymentStatus = 1;
// Uses strict typing

// $paymentStatusDisplay = match($paymentStatus) {
//     1 => 'Paid',
//     2 => 'Not Paid'
// }

?>
