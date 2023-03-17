<?php

class Humano {
    public $nome;
    public $idade;
    public $estadoCivil;

    function __construct($nome, $idade, $estadoCivil) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->estadoCivil = $estadoCivil;
    }

    public function apresentar() {
        echo $this->nome . ' ' . $this->idade . ' ' . $this->estadoCivil;
    }
}

$diego = new Humano('Diego Costa', 33, "Solteiro");
$diego->apresentar();