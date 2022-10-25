<?php
/**
 * Получить все четырехзначные числа, сумма цифр которых равна заданному числу N.
 */
function findNums($num)
{
    $arr = [];
    for ($i = 1000; $i <= 9999; $i++) {
        $sum = 0;
        $n = $i;
        while ($n > 0) {
            $lastDigit = $n % 10;
            $sum += $lastDigit;
            $n = floor($n / 10);
        }
        if ($sum === $num) {
            $arr[] = $i;
        }
    }
    print_r($arr);
}

findNums(6);
