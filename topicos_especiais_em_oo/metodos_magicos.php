<?php
require_once 'classes/Titulo.php';

try{
    $titulo = new Titulo;
    $titulo->dt_vencimento = '2018-05-20';
    $titulo->valor = 12345;
    $titulo->multa = 2;
    $titulo->juros = 0.01;

    print 'O valor é: '. number_format($titulo->valor,2, ',', '.');
}
catch(Exception $e) {
    print $e->getMessage();
}


?>