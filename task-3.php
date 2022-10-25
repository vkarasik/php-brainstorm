<?php
/**
 * Выяснить, образуют ли цифры данного натурального числа N возрастающую оследовательность.
 */
function checkSequence($n)
{
    $next = 10;
    while ($n > 0) {
        if ($n % 10 >= $next) {
            echo "false";
            return;
        }
        $next = $n % 10;
        $n = floor($n / 10);
    }
    echo "true";
}

checkSequence(123);
