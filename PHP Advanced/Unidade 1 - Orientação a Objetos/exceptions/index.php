<?php

// http://php.net/manual/pt_BR/class.exception.php
// 01 - Executar o metodo imprimirDados sem setar nada e gerar o exception
// 02 - Colocar um SET de cada vez
// 03 - Circundar com o TRY CATCH

include_once "MeuException.php";
include_once "Pessoa.php";

try {
    
    $joana = new Pessoa();
    $joana->setNome("Kilderson Sena");
    $joana->setIdade(25);
    $joana->setPeso(75);
    $joana->imprimirDados();

} catch (MeuException $e) {
    echo "Mensagem: " . $e->getMessage() . '<br />';
    echo "Arquivo: " . $e->getFile() . " (Linha {$e->getLine()})<br />";
    echo "<pre>" . $e->getTraceAsString() . "</pre>";
}

?>
