<?php
/**
 * В массиве А(N,М) найти максимальный и минимальный элементы среди всех элементов тех строк,
 * которые упорядочены по возрастанию или по убыванию.
 */
function minMax($arr)
{
    $min = null;
    $max = null;

    function checkSortUp($line)
    {
        $isSorted = false;
        for ($i = 0; $i < count($line) - 1; $i++) {
            if ($line[$i] <= $line[$i + 1]) {
                $isSorted = true;
            } else {
                $isSorted = false;
                break;
            }
        }
        return $isSorted;
    }

    function checkSortDown($line)
    {
        $isSorted = false;
        for ($i = 0; $i < count($line) - 1; $i++) {
            if ($line[$i] >= $line[$i + 1]) {
                $isSorted = true;
            } else {
                $isSorted = false;
                break;
            }
        }
        return $isSorted;
    }

    for ($i = 0; $i < count($arr); $i++) {
        if (checkSortUp($arr[$i])) {
            if ($arr[$i][count($arr[$i]) - 1] > $max || is_null($max)) {
                $max = $arr[$i][count($arr[$i]) - 1];
            }
            if ($arr[$i][0] < $min || is_null($min)) {
                $min = $arr[$i][0];
            }
        } elseif (checkSortDown($arr[$i])) {
            if ($arr[$i][count($arr[$i]) - 1] < $min || is_null($min)) {
                $min = $arr[$i][count($arr[$i]) - 1];
            }
            if ($arr[$i][0] > $max || is_null($max)) {
                $max = $arr[$i][0];
            }
        }
    }
    echo 'Min: ' . $min . PHP_EOL;
    echo 'Max: ' . $max . PHP_EOL;
}

minMax([
    [1, 2, 3, 4],
    [5, 2, 9, 7],
    [66, 77, 88, 99],
    [9, 8, 7, 6],
    [-1, -2, -3, -4],
]);
