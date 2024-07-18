<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function findMatrix($nums) {
        $resp = [];
        $contador = array_count_values($nums);
        
        foreach($contador as $value => $quantidade)
        {            
            for ($i=0; $i<$quantidade; $i++)
            {
                $resp[$i][] = $value;
            }
        }
        
        return $resp;
    }
}