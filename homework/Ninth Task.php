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
function countTotalElements($array) {
    $count = count($array);
    foreach ($array as $value) {
        if (is_array($value)) {
            $count += countTotalElements($value);
        }
    }
    return $count;
}

$totalElements = countTotalElements($firstArr);
echo $totalElements;
?>