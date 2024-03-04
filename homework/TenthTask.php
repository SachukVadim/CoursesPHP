<?php
$firstArr = [
    'one' => 1,
    'two' => [
        'one' => 1,
        'seven' => 22,
        'three' => 32,
    ],
    'three' => [
        'one' => 1,
        'two' => 2,
    ],
    'foure' => 5,
    'five' => [
        'three' => 32,
        'foure' => 5,
        'five' => 12,
    ],
];
function sumAllValues($array) {
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += sumAllValues($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}

$totalSum = sumAllValues($firstArr);
echo $totalSum;

?>