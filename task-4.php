<?php
/**
 * Найти все четные четырехзначные числа, цифры которых следуют в порядке возрастания или убывания
 */
class Sequences
{
    public function findSequences()
    {
        $arr = [];
        for ($i = 1000; $i <= 9999; $i++) {

            if (($i % 2 == 0 && $this->checkSequenceUp($i)) || ($i % 2 == 0 && $this->checkSequenceDown($i))) {
                $arr[] = $i;
            }
        }
        print_r($arr);
    }

    public function checkSequenceUp($n)
    {
        $next = 10;
        while ($n > 0) {
            if ($n % 10 >= $next) {
                return false;
            }
            $next = $n % 10;
            $n = floor($n / 10);
        }
        return true;
    }

    public function checkSequenceDown($n)
    {
        $prev = -1;
        while ($n > 0) {
            if ($n % 10 <= $prev) {
                return false;
            }
            $prev = $n % 10;
            $n = floor($n / 10);
        }
        return true;
    }
}

$a = new Sequences();
$a->findSequences();
