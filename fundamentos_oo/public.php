<?php

class Pessoa {
    public $nome;
    public $endereco;
    public $nascimento;
}

$p1 = new Pessoa;
$p1->nome = 'Maria da Silva';
$p1->endereco = 'Rua do Campo';
$p1->nascimento = '02 Agosto de 1964';
$p1->telefone = '(63) 9 8888-7777'; // definido em tempo de execução

print_r($p1);

?>