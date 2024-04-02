<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function getConcatenation($nums)
    {
        $tam = count($nums);
        $pointer = $tam;
        for ($i = 0; $i < $tam; $i++) {
            $nums[$pointer] = $nums[$i];
            $pointer++;
            
        }
        return $nums;
    }
}

$n = [1,3,2,1];

$resposta = new Solution();
$r = $resposta->getConcatenation($n);

var_dump($r);
