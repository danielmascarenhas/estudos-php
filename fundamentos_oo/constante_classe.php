<?php

class Pessoa {
    private $nome;
    private $genero;
    CONST GENEROS = array( 'M'=>'Masculino', 'F'=>'Feminino' );

    public function __construct( $nome, $genero ) {
        $this->nome = $nome;
        $this->genero = $genero;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNomeGenero() {
        return self::GENEROS[$this->genero];
    }
}

$p1 = new Pessoa( 'Maria da Silva', 'F' );
$p2 = new Pessoa( 'José Filho', 'M' );

print 'Nome: '. $p1->getNome() ."<br>\n";
print 'Gênero: '. $p1->getNomeGenero() ."<br>\n";

print 'Nome: '. $p2->getNome() ."<br>\n";
print 'Gênero: '. $p2->getNomeGenero() ."<br>\n";

print_r(Pessoa::GENEROS);

?>