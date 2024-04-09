<?php

class Solution {

    /**
     * @param String $address
     * @return String
     */
    function defangIPaddr($address) {
        $address = str_replace(".","[.]", $address);
        return $address;
    }
}

$entrada = "255.100.50.0";
$respota = new Solution();
$r = $respota->defangIPaddr($entrada);
var_dump( $r );