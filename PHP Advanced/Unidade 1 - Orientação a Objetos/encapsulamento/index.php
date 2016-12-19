<?php

include_once 'Funcionario.php';
include_once 'Professor.php';

// 01 - Forçcar o erro para mostrar que realmente nao pode ser acessado

$marcos 		= new Funcionario(); 
$marcos->codigo = 1.000; 

$joao = new Professor();
$joao->setSalario(1500);

echo $joao->imprimirSalario();

?>