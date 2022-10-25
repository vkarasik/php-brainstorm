<?php
/**
 * В массиве А(N) подсчитать количество различных элементов.
 */
function countDiff($arr)
{
    $tmpArr = [];
    for ($i = 0; $i < count($arr); $i++) {
        if (!checkDouble($tmpArr, $arr[$i])) {
            $tmpArr[] = $arr[$i];
        }
    }
    echo count($tmpArr);
}

function checkDouble($arr, $item)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $item) {
            return true;
        }
    }
    return false;
}

countDiff([2, 2, 5, 1, 6, 2, 8, 5]);
