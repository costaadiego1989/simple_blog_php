<?php

interface Caracteristicas {
    const NOME = 'Diego Costa';

    public function falar();
}

class Humano implements Caracteristicas {

    public function falar() {
        echo self::NOME . ' está falando';
    }

}

$diego = new Humano;
echo $diego->falar();