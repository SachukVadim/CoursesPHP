<?php

// Task 1
function findElementInNestedArrays($array, $element) {
foreach ($array as $value) {
if (is_array($value)) {
if (findElementInNestedArrays($value, $element)) {
return true;
}
} elseif ($value === $element) {
return true;
}
}
return false;
}

$array = [1, [2, 3, [4, 5]], 6, [7, [8]]];
$elementToFind = 5;
echo "Элемент $elementToFind найден: " . (findElementInNestedArrays($array, $elementToFind) ? 'Да' : 'Нет') . "<br>";

//  Task 2

function countBs($str) {
    if (!is_string($str)) {
        return false;
    }
    return substr_count($str, 'b');
}

$string = "abbccc";
echo "Количество букв 'b' в строке: " . countBs($string) . "<br>";

//   Task 3

function sumOfNestedArray($array)
{
    $sum = 0;
    foreach ($array as $value) {
        if (is_array($value)) {
            $sum += sumOfNestedArray($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
}

$arrayToSum = [1, [2, 3, [4, 5]], 6, [7, [8]]];
echo "Сумма всех элементов массива: " . sumOfNestedArray($arrayToSum) . "<br>";

//  Task 4

function squaresToFit($bigSquareSize, $smallSquareSize)
{
    if (!is_numeric($bigSquareSize) || !is_numeric($smallSquareSize) || $bigSquareSize <= 0 || $smallSquareSize <= 0) {
        return false;
    }
    return floor($bigSquareSize / $smallSquareSize);
}

$bigSquareSize = 10;
$smallSquareSize = 3;
echo "Количество квадратов меньшего размера, которые можно вписать в квадрат большего размера: " . squaresToFit($bigSquareSize, $smallSquareSize) . "<br>";
?>