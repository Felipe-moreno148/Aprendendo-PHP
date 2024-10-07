<?php


echo "Olá, Mundo!";

class teste {

    public string $nome = 'Felipe';
    public string $email = 'exemplo@gmail.com';

    public function bar() {

        echo __METHOD__;
    
    }

}

$teste = new teste;

(new teste)->bar();

var_dump($teste)

$teste->bar();

?>
