<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function buildArray($nums) {        
        foreach ($nums as $k => $v) {
            $arr[$k] = $nums[$v];            
        }
        return $arr;
    }
}

$entrada = [0,2,1,5,3,4];

$resposta = new Solution();
$r = $resposta->buildArray($entrada);
var_dump($r);