<?php
/**
 * В массиве А(N,N) найти суммы элементов, расположенных на главной диагонали, ниже диагонали и выше диагонали.
 */
function getSum($arr)
{
    $sumTop = 0;
    $sumBtm = 0;
    $sumCnt = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sumCnt += $arr[$i][$i];
    }
    for ($i = 0; $i < count($arr); $i++) {
        for ($k = 0; $k < $i; $k++) {
            $sumBtm += $arr[$i][$k];
        }
    }
    for ($i = 0; $i < count($arr); $i++) {
        for ($k = $i + 1; $k < count($arr[$i]); $k++) {
            $sumTop += $arr[$i][$k];
        }
    }
    echo "Center: $sumCnt\n";
    echo "Bottom: $sumBtm\n";
    echo "Top: $sumTop\n";
}

getSum([
    [10, 20, 20, 20],
    [11, 10, 20, 20],
    [11, 11, 10, 20],
    [11, 11, 11, 10],
]);
