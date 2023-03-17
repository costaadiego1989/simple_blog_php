<?php

abstract class Teste {

    public static function hello() {
        echo "Hello!";
    }

    abstract public function sayGoodbye();

}

class AnotherClass extends Teste {

    public function sayGoodbye() {
        echo "Goodbye!";
    }

}

Teste::hello();
$an = new AnotherClass;
echo '<br>';
echo $an->sayGoodbye();