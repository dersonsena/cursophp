<?php

// Fazer a troca de final tanto na classe como nos 
// metodos para realizacao de testes

include_once 'ClasseAbstrata.php';
include_once 'ClasseConcreta1.php';
include_once 'ClasseConcreta2.php';

$classe1 = new ClasseConcreta1();
$classe1->imprimir();
echo $classe1->valorComPrefixo('FOO_') ."<br />";

$classe2 = new ClasseConcreta2();
$classe2->imprimir();
echo $classe2->valorComPrefixo('FOO_') ."<br />";

?>