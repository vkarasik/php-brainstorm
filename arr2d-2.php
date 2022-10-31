<?php
/**
 * В массиве А(N,М) найти номер строки, среднее арифметическое положительных элементов которой является наименьшим.
 */
function minAvg($arr)
{
    $line = 0;
    $avg = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $tmpAvg = 0;
        for ($k = 0; $k < count($arr[$i]); $k++) {
            if ($arr[$i][$k] > 0) {
                $tmpAvg += $arr[$i][$k];
            }
        }
        $tmpAvg = $tmpAvg / count($arr[$i]);
        if ($avg == 0 || $tmpAvg < $avg) {
            $avg = $tmpAvg;
            $line = $i;
        }
    }
    echo "Min AVG at index: $line";
}

minAvg([
    [-10, 20, 20, 20],
    [11, 30, -20, 20],
    [11, -11, 10, 20],
]);
