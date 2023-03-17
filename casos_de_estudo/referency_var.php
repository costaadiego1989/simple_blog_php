<?php 

$name1 = "Diego Costa";
$name2 =& $name1;

echo $name1;
echo '<br>';
echo $name2;

$name3 = "Juliana Colonia";
$name4 =& $name3;

$name3 = "Joaquim";
echo '<br>';
echo $name3;
echo '<br>';
echo $name4;
echo '<br>';
echo gettype("5" * 12);

