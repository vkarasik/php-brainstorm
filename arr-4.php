<?php
/**
 * В массив А(N), упорядоченный по возрастанию, вставить k элементов, не нарушая его последовательности.
 * @param array $arr исходный массив
 * @param array $items элементы для вставки
 */
function insertElements($arr, $items)
{
    for ($i = 0; $i < count($items); $i++) {
        $arr[] = $items[$i];
    }
    for ($i = 0; $i < count($arr); $i++) {
        for ($k = $i + 1; $k < count($arr); $k++) {
            if ($arr[$i] > $arr[$k]) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
            }
        }
    }
    print_r($arr);
}

insertElements([1, 3, 5, 7, 9], [2, 4, 6, 44, 5, 2, 9]);
