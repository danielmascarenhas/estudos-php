<?php

    class Produto{
        private $descricao;
        private $estoque;
        private $preco;

        public function setDescricao($descricao){
            if(is_string($descricao)){
                $this->descricao = $descricao;
            }
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function setEstoque($estoque){
            if(is_numeric($estoque) AND $estoque > 0){
                $this->estoque = $estoque;
            }
        }

        public function getEstoque(){
            return $this->estoque;
        }

        public function aumentarEstoque($unidades){
            if(is_numeric($unidades) AND $unidades >= 0){
                $this->estoque += $unidades;
            }
        }

        public function diminuirEstoque($unidades){
            if(is_numeric($unidades) AND $unidades >= 0){
                $this->estoque -= $unidades;
            }
        }

        public function reajustarPreco($percentual){
            if(is_numeric($percentual) AND $percentual >= 0){
                $this->preco *= (1 + ($percentual/100));
            }
        }
    }

    $p1 = new Produto;
    /*
    $p1->descricao = 'Chocolate';
    $p1->estoque = 10;
    $p1->preco = 8;
    */
    $p1->setDescricao('Chocolate');
    $p1->setEstoque(10);
    print 'Descrição: '. $p1->getDescricao() .'<br>'. PHP_EOL;
    print 'Estoque: '. $p1->getEstoque() .'<br>'. PHP_EOL;

    /*
    print "O estoque de {$p1->descricao} é {$p1->estoque} <br>\n";
    print "O preço de {$p1->descricao} é {$p1->preco} <br>\n";

    $p1->aumentarEstoque(10);
    $p1->diminuirEstoque(5);
    $p1->reajustarPreco(50);
    print "O estoque de {$p1->descricao} é {$p1->estoque} <br>\n";
    print "O preço de {$p1->descricao} é {$p1->preco} <br>\n";

    $p2 = new Produto;
    $p2->descricao = 'Café';
    $p2->estoque = 20;
    $p2->preco = 4;

    output objeto inteiro
    var_dump($p1);
    var_dump($p2);
    */
?>