<?php

require_once('solution.php');

$entrada = "1aB!";
$entrada = "-Aa1a1-a1aq-";

$resposta = new Solution;

var_dump($resposta->strongPasswordCheckerII($entrada));