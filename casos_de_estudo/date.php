<?php

$d1 = date("d-m-y");
$d2 = date("D-m-y");
$d3 = date("d-M-y");
$d4 = date("d-m-Y");
$d5 = date("D-M-Y");
$d6 = date("d-F-l");

echo $d1 . '<br>';
echo $d2 . '<br>';
echo $d3 . '<br>';
echo $d4 . '<br>';
echo $d5 . '<br>';
echo $d6 . '<br>';

$addFiveDays = strtotime('5 days');
$addFiveMonths = strtotime('5 months');
$addFiveYears = strtotime('5 years');

echo date('d/m/Y', $addFiveDays) . '<br>';
echo date('d/m/Y', $addFiveMonths) . '<br>';
echo date('d/m/Y', $addFiveYears) . '<br>';