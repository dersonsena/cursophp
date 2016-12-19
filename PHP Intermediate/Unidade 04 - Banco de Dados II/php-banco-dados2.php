<?php
// EXECUTANDO QUERY SEM RETORNO DE DADOS

// Conectando e selecionando base de dados
$con = mysql_connect('localhost','root','') or die ('Erro na conexão: ' . mysql_error());
$db  = mysql_select_db('treinamento_php', $con) or die ('Erro ao selecionar base de dados: ' . mysql_error());

// Fazendo consulta
$qry = mysql_query("INSERT INTO alunos(nome, email) VALUES('João Mesquita', 'joaomesquita@email.com')") or die ('Erro ao inserir aluno: ' . mysql_error());

if($qry) {
	echo "Registro inserido com sucesso";
} else {
	echo "Erro ao inserir Registro.";
}