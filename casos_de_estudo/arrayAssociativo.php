<?php

$arrAss = ['nome' => 'Layla', 'idade' => 8, 'cor' => 'Fulvo', 'dono' => 'Diego Costa'];

echo print_r($arrAss);
echo '<br>';
echo $arrAss['nome'];
echo '<br>';
echo $arrAss['idade'];
echo '<br>';
echo $arrAss['cor'];
echo '<br>';
echo $arrAss['dono'];

$arrAssPessoa = ['nome' => "Juliana Colonia", 'idade' => 39, 'filhos' => true];

if ($arrAssPessoa['idade'] >= 18) {
    echo '<br>';
    echo 'A pessoa ' . $arrAssPessoa['nome'] . ' tem ' . $arrAssPessoa['idade'] . ' anos, portanto, é maior de idade.';
} else {
    echo '<br>';
    echo 'A pessoa é menor de idade';
}