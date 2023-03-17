<?php

$fruits = ['Banana', 'Maçã', 'Abacaxi', 'Manga', 'Melancia', 'Pêra', 'Uva', 'Caju', 'Melão'];

print_r($fruits);
echo '<br>';
print_r(array_slice($fruits, 3));
echo '<br>';
print_r(array_slice($fruits, 2, -5));

