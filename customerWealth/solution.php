<?php

declare(strict_types=1);

class Solution 
{

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        $max = 0;
        foreach ($accounts as $account)
        {
            $soma = 0;
            foreach ($account as $balance)
            {
                $soma += $balance;                
            }
            //if ($soma > $max) $max = $soma;
            $max = ($soma > $max) ? $soma : $max; 
        }
        return $max;
    }
}