<?php

$carro = [
    'marca' => 'BMW',
    'modelo' => 'X5',
    'motor' => '2.5',
    'transmissao' => 'Automático',
    'preco' => 549000
];

if (isset($carro['marca'])) {
    echo 'A variável marca existe';
} else {
    echo 'A variável marca não existe';
}

echo '<br>';

if (isset($carro['teste'])) {
    echo 'A variável teste existe';
} else {
    echo 'A variável teste não existe';
}