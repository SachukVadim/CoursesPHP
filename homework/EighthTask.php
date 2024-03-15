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

$secondElements = [];

foreach ($firstArr as $key => $value) {
    if (is_array($value)) {
        $values = array_values($value);
        if (isset($values[1])) {
            $secondElements[] = $values[1];
        }
    }
}

print_r($secondElements);
?>