<?php

	$pdo = new PDO("mysql:host=localhost;dbname=nome_banco", "root", "sua_senha");
   
	if(!$pdo){
		die('Erro ao criar a conexão');
	}
	
	$rs = $pdo->query("SELECT idcliente, nome FROM cliente")->fetchAll();
	
	if(!$rs){
		print_r($pdo->errorInfo());
	}

	foreach ($rs as $reg){
		echo 'Código: ' . $reg['idcliente'] . '<br />';
		echo  'Nome: ' . $reg['nome'] . '<br /><br />';
	}
   
?>