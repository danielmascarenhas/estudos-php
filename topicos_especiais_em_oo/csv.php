<?php
require_once 'classes/CSVParser.php';

// definicao das subclasses de erro
class FileNotFoundException extends Exception{}
class FilePermissionException extends Exception{}

$csv = new CSVParser('clientes.csv', ';');

try {
    $csv->parse(); // metodo que pode lancar excecao
    while($row = $csv->fetch()) {
        print $row['Cliente']. " - ";
        print $row['Cidade']. "<br>\n";
    }
}
catch (FileNotFoundException $excecao) {
    print_r($excecao->getTrace());
    die("Arquivo não encontrado");
}
catch (FilePermissionException $excecao) {
    echo $excecao->getFile() .' : '. $excecao->getLine() .' # '. $excecao->getMessage();
}

?>