<?php

$str = "Esta é uma string muito grande mesmo.";

for ($i = 0; $i < strlen($str); $i++) {
    echo $str[$i] . '<br>';
}