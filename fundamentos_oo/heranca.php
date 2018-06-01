<?php

require_once 'classes/Conta.php';
require_once 'classes/ContaCorrente.php';
require_once 'classes/ContaPoupanca.php';

$cc = new ContaCorrente('5555-6', '8888-9', 500, 3000);
$cp = new ContaPoupanca('2222-3', '7777-8', 1500);

print('Conta Corrente: '. $cc->getInfo() .'<br> Conta Poupança: '. $cp->getInfo(). '<br>');

print('Saldo Conta Corrente: '. $cc->getSaldo() .'<br>');
$cc->retirar(350);
print('Saldo Conta Corrente: '. $cc->getSaldo() .'<br>');
print('Saldo Conta Poupança: '. $cp->getSaldo() .'<br>');
$cp->depositar(500);
print('Saldo Conta Poupança: '. $cp->getSaldo() .'<br>');
$cp->retirar(2050);
print('Saldo Conta Poupança: '. $cp->getSaldo() .'<br>');
?>