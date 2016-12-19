<?php

   $pdo = new PDO("mysql:host=localhost;dbname=nome_banco", "root", "sua_senha");
   
	if(!$pdo){
		die('Erro ao criar a conexão');
	}
   
?>