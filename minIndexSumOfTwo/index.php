<?php

declare(strict_types=1);

require_once('solution.php');

$solution = new Solution();

$list1 = ["Shogun","Tapioca Express","Burger King","KFC"]; 
$list2 = ["Piatti","The Grill at Torrey Pines","Hungry Hunter Steakhouse","Shogun"];

var_dump($solution->findRestaurant($list1, $list2));