<?php

declare(strict_types=1);

class Solution {

    /**
     * @param Integer $n
     * @param Integer $m
     * @return Integer
     */
    function differenceOfSums($n, $m) {
        $r = 0;
        for ($i = 1; $i <= $n; $i++) {
            
            if (($i % $m) == 0) $r -= $i;
            else $r += $i;
            
        }
        return $r;
    }
}