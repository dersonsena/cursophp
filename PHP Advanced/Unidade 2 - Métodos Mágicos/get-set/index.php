<?php

include_once 'Pessoa.php';

$joao        = new Pessoa();
$joao->nome  = 'Ricardo';
$joao->idade = 28;

echo $joao->nome . ' - ' . $joao->idade;

?>