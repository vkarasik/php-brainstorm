<?php
/**
 * Определить, является ли число 2n m симметричным,
 * т.е. запись числа содержит четное количество цифр и совпадают его левая и правая половинки.
 */
function checkNumber($n)
{
    $length = 0;
    $orignalNum = $n;
    while ($n > 0) {
        $length++;
        $n = floor($n / 10);
    }
    if ($length % 2 == 0) {
        $div = 10 ** ($length / 2);
        $remain = $orignalNum % $div;
        if ($remain == floor($orignalNum / $div)) {
            echo "true";
        } else {
            echo "false";
        }
    } else {
        echo "false";
    }
}

checkNumber(6868);
