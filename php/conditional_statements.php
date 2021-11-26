<?php

// Control structures ( if / else / elseif / else if )
$score = 62;
if ($score >= 90) {
    echo 'A';
} elseif ($score >= 80) {
    echo 'B';
} elseif ($score >= 70) {
    echo 'C';
} elseif ($score >= 60) {
    echo 'D';
} elseif ($score >= 50) {
    echo 'E';
} else {
    echo 'F';
}

?>

<!-- Alternate syntax  -->

<?php $score = 95 ?>

<?php if ($score >= 90): ?>
    <b>A</b>
<?php elseif ($score >= 80): ?>
    <b>B</b>
<?php endif ?>
