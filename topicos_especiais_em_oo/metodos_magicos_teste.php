<?php

require_once 'classes/TituloTeste.php';

$titulo = new Titulo;
$titulo->valor = 12345;
$titulo->juros = 0.1;
$titulo->multa = 2;

print 'O conteúdo do título é: '. $titulo;

/*
    if(isset($titulo->valor)) {
        print 'Valor definido <br>';
    }
    else {
        print 'Valor não definido<br>';
    }

    unset($titulo->valor);

    if(isset($titulo->valor)) {
        print 'Valor definido <br>';
    }
    else {
        print 'Valor não definido<br>';
    }

    print 'O valor é: '. number_format($titulo->valor,2, ',', '.');
    print $titulo->valor;
*/
?>