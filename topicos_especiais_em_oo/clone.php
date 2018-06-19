<?php

class Titulo {
    public $codigo;
    public $dt_nascimento;
    public $valor;
    public $juros;
    public $multa;

    public function __clone() {
        $this->codigo = NULL;
    }

    public function __call($method, $values) {
        return call_user_func($method, get_object_vars($this));
        // print "Você executou o método {$method}, com os parâmetros: ". implode(',', $values). "<br>\n";
    }

}

$titulo = new Titulo;
$titulo->codigo = 1;
$titulo->dt_nascimento = '2018-05-20';
$titulo->valor = 12345;
$titulo->juros = 0.1;
$titulo->multa = 2;
// $titulo->teste1(1,2,3);

$titulo2 = clone $titulo;
$titulo2->valor = 78910;

$titulo->print_r();
print 'A contagem é: '. $titulo->count();

/*
    var_dump($titulo->valor);
    var_dump($titulo2->valor);
*/

?>