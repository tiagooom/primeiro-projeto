<?php

class Solution {

    /**
     * @param String $password
     * @return Boolean
     */
    function strongPasswordCheckerII($password) {
        $checker = true;
        
        if (strlen($password) < 7) $checker = false;
        elseif (preg_match('/[!@#$%^&*()\-\+]/', $password) == false) $checker = false;
        // else if(preg_match('/[0-9]/', $password) == false) $checker = false;
        // else if(preg_match('/[A-Z]/', $password) == false) $checker = false;
        // else if(preg_match('/[a-z]/', $password) == false) $checker = false;
        // else if(!preg_match('/(.)\1/', $password) == false) $checker = false;
        
        
        return $checker;
    }
}