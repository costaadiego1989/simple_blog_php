<?php

$carro = [
    'marca' => 'BMW',
    'modelo' => 'X5',
    'motor' => '2.5',
    'transmissao' => 'Automático',
    'preco' => 549000
];

print_r(extract($carro));
echo '<br>';
echo $marca . '<br>';
echo $modelo . '<br>';
echo $motor . '<br>';
echo $transmissao . '<br>';
echo $preco . '<br>';