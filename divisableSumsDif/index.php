<?php
//desafio leetcode 2894
declare(strict_types=1);

require_once("solution.php");

$entrada = 5;
$m = 6;

$resposta = new Solution($entrada, $m);

var_dump($resposta->differenceOfSums($entrada, $m));