<?php

// Switch statements

$paymentStatus = 'paid';

switch ($paymentStatus) {
    case 'paid':
        echo 'Paid';
        break;

    case 'declined':
        echo 'Declined';
        break;

    case 'pending':
        echo 'Pending';
        break;

    default:
        echo 'Unknown';
        break;
}


?>

