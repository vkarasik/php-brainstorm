<?php
/**
 * В массиве А(N) найти:
 * а) число элементов, предшествующих первому отрицательному элементу;
 * б) сумму нечетных элементов массива, следующих за последним отрицательным элементом.
 */
function countBefore($arr)
{
    $count = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] < 0) {
            break;
        } else {
            $count++;
        }
    }
    echo "Nums before first negative: " . $count . "\n";
}

countBefore([2, 3, 5, -1, 6, -2, 8, 9]);

function sumOdds($arr)
{
    $sumOdds = 0;
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if ($arr[$i] < 0) {
            break;
        } elseif ($arr[$i] % 2 != 0) {
            $sumOdds += $arr[$i];
        }
    }
    echo "Sum odds after last negative: " . $sumOdds . "\n";
}

sumOdds([2, 3, 5, -1, 6, -2, 8, 9, 7, 4]);
