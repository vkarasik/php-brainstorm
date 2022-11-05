<?php
/**
 * В массиве А(N,N) поменять местами максимальные элементы
 * нижнего и верхнего треугольников относительно главной диагонали.
 */
function prettyPrint($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        echo '[';
        if (is_array($arr[$i])) {
            for ($k = 0; $k < count($arr[$i]); $k++) {
                echo isset($arr[$i][$k + 1]) ? $arr[$i][$k] . ', ' : $arr[$i][$k];
            }
        }
        echo ']' . PHP_EOL;
    }
}

function changeMax($arr)
{
    $maxTop = $arr[0][1];
    $maxTopIndex = [0, 1];
    $maxBtm = $arr[1][0];
    $maxBtmIndex = [1, 0];

    for ($i = 0; $i < count($arr); $i++) {
        for ($k = $i + 1; $k < count($arr[$i]); $k++) {
            if ($arr[$i][$k] > $maxTop) {
                $maxTop = $arr[$i][$k];
                $maxTopIndex = [$i, $k];
            }
        }
    }

    for ($i = 1; $i < count($arr); $i++) {
        for ($k = 0; $k < $i; $k++) {
            if ($arr[$i][$k] > $maxBtm) {
                $maxBtm = $arr[$i][$k];
                $maxBtmIndex = [$i, $k];
            }
        }
    }
    $arr[$maxBtmIndex[0]][$maxBtmIndex[1]] = $maxTop;
    $arr[$maxTopIndex[0]][$maxTopIndex[1]] = $maxBtm;

    echo 'Max Top:' . $maxTop . PHP_EOL;
    echo 'Max Btm:' . $maxBtm . PHP_EOL;
    prettyPrint($arr);
}

changeMax([
    [2, 2, 3, 4],
    [4, 3, 2, 5],
    [6, 1, 4, 8],
    [3, 2, 5, 8],
]);
