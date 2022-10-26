<?php
/**
 * Получить все четырехзначные числа, в записи которых встречаются только цифры 0,2,3,7.
 */
function getNums()
{
    $arr = [];
    for ($i = 1000; $i <= 9999; $i++) {
        $n = $i;
        $sum = 0;
        $count = 0;
        $mult = 1;
        while ($n > 0) {
            $remain = $n % 10;
            if ($remain == 0 || $remain == 2 || $remain == 3 || $remain == 7) {
                $sum += $remain;
                $mult *= $remain;
                $count++;
            }
            $n = floor($n / 10);
        }
        if ($sum == 12 && $count == 4 && $mult == 0) {
            $sum = 0;
            $count = 0;
            $mult = 1;
            $arr[] = $i;
        }
    }
    print_r($arr);
}

getNums();
