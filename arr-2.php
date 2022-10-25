<?php
/**
 * Дан массив А(N). Получить массив В(N), i-элемент которого равен среднему арифметическому первых i элементов массива А.
 */
function getArr($arr, $index)
{
    $sum = 0;
    for ($i = 0; $i < $index; $i++) {
        $sum += $arr[$i];
    }
    $arr[$index] = $sum / $index;
    print_r($arr);
}

getArr([2, 3, 5, 1, 6, 2, 8, 9], 5);
