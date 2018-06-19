<?php

class Titulo {
/*
    private $dt_vencimento;
    private $valor;        
    private $juros;    
    private $multa;
*/

    private $data;

    public function __set($propriedade, $valor) {
        // print "Tentou gravar $propriedade = $valor. Use setValor()<br>\n";
        $this->data[$propriedade] = $valor;
    }

    public function __get($propriedade) {
        return $this->data[$propriedade];
        /*
            if($propriedade == 'valor') {
                print "Tentou acessar '{$propriedade}' inacessível. Use getValor()<br>\n";
                return 0;
            }
        */
    }

    public function __isset($propriedade) {
        return isset($this->data[$propriedade]);
    }

    public function __unset($propriedade) {
        unset($this->data[$propriedade]);
    }

    public function __toString() {
        return json_encode($this->data);
    }

/*    
    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        if(is_numeric($valor)) {
            $this->valor = $valor;
        }
    }
*/
}

?>