<?php

class Solution
{
    /**
     * @param Integer[][] $points
     * @return Integer
     */
    function maxWidthOfVerticalArea($points) 
    {
        usort($points, function ($a, $b) {
            return $a[0] - $b[0];
        });

        $maxDist = 0;
        for ($i = 1; $i<count($points); $i++)
        {
            if (($points[$i][0] - $points[$i-1][0]) > $maxDist) $maxDist = $points[$i][0] - $points[$i-1][0];
        }
        return $maxDist;
    }
}