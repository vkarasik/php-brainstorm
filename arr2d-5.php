<?php
/**
 * В массиве А(N,М) найти сумму элементов тех столбцов, все элементы которых кратны заданному числу р.
 */
function sumCol($arr, $num)
{
    $sum = 0;
    for ($i = 0; $i < count($arr[0]); $i++) {
        $tmp = 0;
        for ($k = 0; $k < count($arr); $k++) {
            if ($arr[$k][$i] % $num == 0) {
                $tmp += $arr[$k][$i];
            } else {
                $tmp = 0;
                break;
            }
        }
        $sum += $tmp;
    }
    echo $sum;
}

sumCol([
    [2, 2, 3, 4],
    [4, 3, 2, 4],
    [6, 1, 4, 8],
    [8, 8, 8, 8],
], 2);
