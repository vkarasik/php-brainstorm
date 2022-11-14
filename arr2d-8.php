<?php
/**
 * В каждой строке массива А(N,М) удалить все четные положительные элементы,
 * стоящие между первым и последним максимальными элементами.
 */
function prettyPrint($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        echo '[';
        if (is_array($arr[$i])) {
            for ($k = 0; $k < count($arr[$i]); $k++) {
                if (isset($arr[$i][$k])) {
                    echo isset($arr[$i][$k + 1]) ? $arr[$i][$k] . ', ' : $arr[$i][$k];
                } else {
                    echo ', ..., ';
                }
            }
        }
        echo ']' . PHP_EOL;
    }
}

function removeItems($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        $max = findMax($arr[$i]);
        $range = findRange($arr[$i], $max);

        for ($k = $range[0]; $k <= $range[1]; $k++) {
            if ($arr[$i][$k] > 0 && $arr[$i][$k] % 2 == 0) {
                $arr[$i][$k] = null;
            }
        }
    }
    prettyPrint($arr);
}

function findMax($arr)
{
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }
    return $max;
}

function findRange($arr, $num)
{
    $start = null;
    $end = null;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $num) {
            $start = $i + 1;
            break;
        }
    }

    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if ($arr[$i] == $num) {
            $end = $i - 1;
            break;
        }
    }
    return array($start, $end);
}

removeItems([
    [2, 4, 3, -1, 4],
    [5, 3, 2, 5, 3],
    [8, -1, 4, 8, 2],
]);
