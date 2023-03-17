<?php

$str = "Meu amigo invisivel Plank";

$strToArray = explode(" ", $str);

print_r($strToArray);

echo '<br>';

for ($i = 0; $i < count($strToArray); $i++) {
    echo $strToArray[$i] . '<br>';
}