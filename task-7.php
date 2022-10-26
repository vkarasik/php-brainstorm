<?php
/**
 * Найти наибольший общий делитель (НОД) двух натуральных чисел N и M, реализуя алгоритм эвклида.
 */
function gcd($n, $m)
{
    if ($n !== $m) {
        $max = $n > $m ? $n : $m;
        $min = $n < $m ? $n : $m;
        while ($max > $min) {
            $max = $max - $min;
        }
        echo $max == $min ? $max : 1;
    } else {
        echo $n;
    }
}

gcd(12, 32);
