<?php

// Fazer a troca de final tanto na classe como nos 
// metodos para realizacao de testes

include_once 'ClasseAbstrata.php';
include_once 'ClasseConcreta1.php';
include_once 'ClasseConcreta2.php';

$filha = new ClasseFilha();
echo $filha->getOla();

?>