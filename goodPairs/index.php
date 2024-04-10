<?php
//Achar pares dentro de um array
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums) {
        $pairs = 0;

        foreach ($nums as $key=>&$value) {
            for ($i= $key+1; $i<count($nums); $i++){
                if ($value == $nums[$i]) $pairs++;
            }
        }    

        return $pairs;
    }
}

$entrada = [1,2,3];

$resposta = new Solution();
$r = $resposta->numIdenticalPairs($entrada);

var_dump($r);