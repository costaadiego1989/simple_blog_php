<?php

$str = "Estou testando a string strpos, pois cmo strpos consigo encontrar a posição dentro do texto.";

echo strpos($str, 'strpos');

$findWord = strpos($str, 'Diego');

echo '<br>';

if(!$findWord) {
    echo 'Não foi encontrado a palavra pesquisada.';
}