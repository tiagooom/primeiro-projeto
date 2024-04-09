<?php

class Solution {

    /**
     * @param Float $celsius
     * @return Float[]
     */
    function convertTemperature($celsius) {
        $temps[0] = $celsius + 273.15;
        $temps[1] = $celsius * 1.80 + 32.00;
        return $temps;
    }
}

$entrada = 36.50;

$resposta = new Solution();
$r = $resposta->convertTemperature($entrada);

var_dump($r);