<?php

// Conectando e selecionando base de dados
$con = mysql_connect('localhost','root','') or die ('Erro na conexão: ' . mysql_error());
$db  = mysql_select_db('treinamento_php', $con) or die ('Erro ao selecionar base de dados: ' . mysql_error());

// Fazendo consulta
$qry = mysql_query("SELECT * FROM alunos ORDER BY nome ASC") or die ('Erro ao selecionar alunos: ' . mysql_error());

echo "<ul>";

while($row = mysql_fetch_assoc($qry)) {

	echo "<li>{$row['nome']} / {$row['email']}</li>";

}

echo "</ul>";