<?php

class Solution {

    /**
     * @param String[] $list1
     * @param String[] $list2
     * @return String[]
     */
    function findRestaurant($list1, $list2) {
        $lowestInd = null;
        $resposta = [];
        
        foreach($list1 as $key => $word)
        {            
            if (($posicao = array_search($word, $list2)) !== false)
            {
                echo $word.': '.$key.' '.$posicao.'<br>';
                if ($lowestInd === null){
                    $lowestInd = $key + $posicao;
                    $resposta[] = $word;
                } 
                else{
                    if (($key + $posicao) < $lowestInd)
                    {
                        unset($resposta);
                        $resposta[] = $word;
                    }elseif (($key + $posicao) == $lowestInd)
                    {
                        $resposta[] = $word;
                    }
                } 
            }
        }
        return $resposta;
    }
}