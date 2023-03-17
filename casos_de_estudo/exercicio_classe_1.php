<?php

class Humano {
    public $nome = null;
    public $idade = null;
    private $saldoConta = 15000;
    protected $chavePix = 'costaadieog@icloud.com';

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        return $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        return $this->idade = $idade;
    }

    protected function getSaldo() {
        return $this->saldoConta;
    }

    protected function setSaldo($valor) {
        return $this->saldoConta = $valor;
    }

    protected function getChavePix() {
        return $this->chavePix;
    }

    protected function setChavePix($newKey) {
        return $this->chavePix = $newKey;
    }
}

class Programador extends Humano {

    public function getSaldoFromFather() {
        $this->getSaldo();
    }

    public function getKeyPixFromFather() {
        $this->getChavePix();
    }

}

$diego = new Programador;
$diego->setNome("Diego Costa");
$diego->setIdade(33);
$diego->getSaldoFromFather();
$diego->getKeyPixFromFather();

echo $diego->getNome() . ' ' . $diego->getIdade() . ' ' . $diego->getSaldoFromFather() . ' ' . $diego->getKeyPixFromFather();