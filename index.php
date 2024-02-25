<?php


$var = 7;
$var1 = 3;
    $number1 = ($var % $var1);
 echo "Залишок від ділення $var на $var1: $number1 <br/> " ;

$var2 = 7;
$var3 = 7.15;
    $number2 = floor($var2 / $var3);
    echo "Ціла частина діллення $var2 на $var3: $number2 <br/> ";

$var4 = 25;
    $number3 = sqrt($var4);
    echo "Корінь з числа $var4: $number3 <br/> ";

$number4 = "Десять негритят пошли купаться в море";
$words = explode(" ", $number4);
$fourthWord1 = $words[3];
$fourthWord2 = $words[4];
$fourthWord3 = $words[2];
echo "Четвертое слово из фразы: $fourthWord1 <br/> ";
echo "Четвертое слово из фразы: $fourthWord2 <br/> ";
echo "Четвертое слово из фразы: $fourthWord3 <br/> " ;


$number5 = "Десять негритят пошли купаться в море";
$bukva17 = mb_substr($number5, 16, 1);
echo "17-й символ з фрази: $bukva17 <br/>";

$number6 = "Десять негритят пошли купаться в море <br/>";
$FirstUp = mb_convert_case($number6, MB_CASE_TITLE, "UTF-8");
echo $FirstUp;

$number7 = "Десять негритят пошли купаться в море";
$dlina = mb_strlen($number7);
echo "Длина строки: $dlina <br/>";

if (true == 1) {
    echo "Твердження 'true дорівнює 1' є вірним. <br/> ";
} else {
    echo "Твердження 'true дорівнює 1' є невірним. <br/>";
}

if (false === 0) {
    echo "false тождественно 0 і типи совпадают <br/>";
} else {
    echo "false НЕ тождественно 0 або типи НЕ совпадают  <br/> ";

}

$string1 = 'Три';
$string2 = 'Three';
$sum = mb_strlen($string1);
$sum1 = mb_strlen($string2);
if ($sum > $sum1) {
    echo "$sum больше чем $sum1 <br/>";
} elseif ($sum < $sum1) {
    echo "$sum меньше чем $sum1 <br/>";
} else {
    echo "Суммы равны <br/>";
}


$result1 = 125 * 13 + 7;

$result2 = 223 + 28 * 2;

if ($result1 > $result2) {
    echo "Результат выражения '125 умножить на 13 плюс 7' больше, чем результат выражения '223 плюс 28 умножить на 2'";
} elseif ($result1 < $result2) {
    echo "Результат выражения '223 плюс 28 умножить на 2' больше, чем результат выражения '125 умножить на 13 плюс 7'";
} else {
    echo "Результаты выражений равны";
}



?>