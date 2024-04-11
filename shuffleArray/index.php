<?php
//Desafio 1470 do leetcode
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n) {
        $r = [];
        for ($i = 0; $i < $n; $i++) {
            $p = 2*$i;
            $r[2*$i] = $nums[$i];
            echo $r[2*$i]. " ";
            $r[2*$i+1] = $nums[$n+$i];
            echo $r[2*$i+1]. " ";
        }
        return $r;
    }
}

$entrada = [1,2,3,4,4,3,2,1]; 
$n = 4;

$resposta = new Solution();
$r = $resposta->shuffle($entrada , $n);
//var_dump($r);