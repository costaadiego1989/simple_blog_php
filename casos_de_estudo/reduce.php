<?php

$numbers = [1, 5, 15, 23, 11, 17, 41];

function somar($a, $b) {
    return $a + $b;
}

$reduce = print_r(array_reduce($numbers, 'somar'));