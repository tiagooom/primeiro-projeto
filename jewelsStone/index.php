<?php

//desafio 711 leetcode
class Solution
{

    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones)
    {  
        $allJewels = 0;
        for ($i = 0; $i < strlen($stones); $i++){
            if (strpos($jewels, $stones[$i]) !== false){
                
                $allJewels++;

            } 
            
        }
        
        return $allJewels;
    }
}

$jewels = "aA"; 
$stones = "aAAbbbb";

$resposta = new Solution();
$r = $resposta->numJewelsInStones($jewels, $stones);
var_dump($r);