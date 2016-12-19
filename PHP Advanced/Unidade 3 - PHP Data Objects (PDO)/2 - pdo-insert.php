<?php

	$pdo = new PDO("mysql:host=localhost;dbname=nome_banco", "root", "sua_senha");
   
	if(!$pdo){
		die('Erro ao criar a conexão');
	}
	
	$executa = $pdo->query("INSERT INTO cliente(idcliente, nome) VALUES ('1', 'Rafael')");
	
	if($executa) {
		echo 'Dados inseridos com sucesso!';
	} else{
		print_r($pdo->errorInfo());
	}
   
?>