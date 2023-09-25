<?php
$numbers = range(1, 10);

function removeEvenNumbers($numbers) {
    $result = array_filter($numbers, function($num) {
        return $num % 2 != 0;
    });

    print_r($result);
}

removeEvenNumbers($numbers);

