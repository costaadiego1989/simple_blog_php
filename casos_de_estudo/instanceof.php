<?php

class Humano {}

class Animal {}

class Professor extends Humano {}

$diego = new Humano;
$layla = new Animal;

if ($diego instanceof Humano) {
    echo 'Diego é um humano.' . '<br>';
} else {
    echo 'Diego não é um humano.' . '<br>';
}

if ($layla instanceof Humano) {
    echo 'Layla é um animal.' . '<br>';
} else {
    echo 'Layla não é um animal.' . '<br>';
}