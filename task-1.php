<?php
/**
 * Определить количество цифр, меньших 5, используемых при записи натурального числа N.
 */
function countNums($n)
{
    $count = 0;
    while ($n > 0) {
        if ($n % 10 < 5) {
            $count++;
        }
        $n = floor($n / 10);
    }
    echo $count;
}

countNums(6);
