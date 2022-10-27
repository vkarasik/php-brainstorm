<?php
/**
 * В массиве А(N) каждый элемент равен 0, 1 или 2.
 * Переставить элементы массива так, чтобы сначала расположились все нули, затем все двойки и, наконец, все единицы.
 */
function rearrange($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        for ($k = $i + 1; $k < count($arr) - 1; $k++) {
            if ($arr[$i] == 1 && $arr[$k] == 0) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
                break;
            } elseif ($arr[$i] == 2 && $arr[$k] == 0) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
                break;
            } elseif ($arr[$i] == 1 && $arr[$k] == 2) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$k];
                $arr[$k] = $tmp;
            }
        }
    }
    print_r($arr);
}

rearrange([1, 0, 0, 2, 0, 0, 1, 1, 0, 0, 2, 1]);
