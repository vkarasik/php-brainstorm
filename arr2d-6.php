<?php
/**
 * В матрице А(N,N) найти первую строку, не содержащую отрицательных элементов,
 * и умножить ее как вектор на матрицу А.
 */
function matrix($arr)
{
    $vector = null;

    for ($i = 0; $i < count($arr); $i++) {
        $isPositive = true;
        for ($k = 0; $k < count($arr[$i]); $k++) {
            if ($arr[$i][$k] >= 0) {
                continue;
            } else {
                $isPositive = false;
                break;
            }
        }
        if ($isPositive) {
            $vector = $arr[$i];
            break;
        }
    }

    for ($i = 0; $i < count($arr); $i++) {
        for ($k = 0; $k < count($arr[$i]); $k++) {
            $arr[$i][$k] = $arr[$i][$k] * $vector[$k];
        }
    }

    print_r($arr);
}

matrix([
    [2, -2, 3, 4], // [6]
    [4, 3, 2, -4], // [1]
    [6, 1, 4, 8],  // [4]
    [8, 8, 8, 8],  // [8]
]);
