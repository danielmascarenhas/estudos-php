<?php

    class Produto{
        private $descricao;
        private $estoque;
        private $preco;

        public function __construct($descricao, $estoque, $preco){
            if(is_string($descricao)){
                $this->descricao = $descricao;
            }
            if(is_numeric($estoque) AND $estoque > 0){
                $this->estoque = $estoque;
            }
            if(is_numeric($preco) AND $preco > 0){
                $this->preco = $preco;
            }

            print "CONSTRUÍDO: Objeto {$descricao}, estoque {$estoque}, preço {$preco}<br>\n";
        }

        public function __destruct(){
            print "DESTRUÍDO: Objeto {$this->descricao}, estoque {$this->estoque}, preço {$this->preco}<br>\n";
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getEstoque(){
            return $this->estoque;
        }

        public function getPreco(){
            return $this->preco;
        }
    }

    $p1 = new Produto('Chocolate', 10, 5);
    unset($p1);
    $p2 = new Produto('Café', 100, 7);
    unset($p2);


?>