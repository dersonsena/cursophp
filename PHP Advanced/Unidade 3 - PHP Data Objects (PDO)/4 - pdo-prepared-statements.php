<?php

	$pdo = new PDO("mysql:host=localhost;dbname=nome_banco", "root", "sua_senha");
   
	if(!$pdo){
		die('Erro ao criar a conexão');
	}
	
	$idcliente = 100;
	$nome      = "Rafael Wendel Pinheiro";
	
	try {
	
		$stmte = $pdo->prepare("INSERT INTO cliente(idcliente, nome) VALUES (:idcliente, :nome)");
		$stmte->bindParam(":idcliente", $idcliente , PDO::PARAM_INT);
		$stmte->bindParam(":nome", $nome , PDO::PARAM_STR);
		$executa = $stmte->execute();

		if($executa) {
			echo 'Dados inseridos com sucesso';
		} else {
			echo 'Erro ao inserir os dados';
		}
	   
	} catch(PDOException $e){
		echo $e->getMessage();
	}
   
?>