<?php

declare(strict_types=1);

require_once('solution.php');

$accounts = [[2,8,7],[7,1,3],[1,9,5]];

$solution = new Solution();
var_dump($solution->maximumWealth($accounts));