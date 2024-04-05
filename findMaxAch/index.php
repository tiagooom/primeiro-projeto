<?php

class Solution {

    /**
     * @param Integer $num
     * @param Integer $t
     * @return Integer
     */
    function theMaximumAchievableX($num, $t) {
        $x = $num + 2*$t;

        return $x;
    }
}

$entrada = 3;
$t = 2;

$resposta = new Solution();
$r = $resposta->theMaximumAchievableX($entrada, $t);
var_dump($r);