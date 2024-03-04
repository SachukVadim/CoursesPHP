<?php

$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];

$firstFour = array_slice($arr, 0, 4);

$arr = array_slice($arr, 4);

$arr = array_merge($arr, $firstFour);

print_r($arr);
?>