<?php
// MOSTRAR OS PARAMETROS E 
// RETORNOS DAS FUNCOES ABAIXO

// Caso a conexao seja feito com sucesso
if($con = mysql_connect('localhost','root','')) {

	echo "Conexão feita com sucesso !<br />";
	
	// Verificando se banco de dados foi selecionado com sucesso
	if($db = mysql_select_db('treinamento_php', $con)) {
		
		echo "Banco de dados selecionado.";

	// Caso ocorra algum erro ao selecionar base de dados
	} else {
		
		echo mysql_error();
		
	}

// Caso ocorra algum erro na conexao 
} else {

	echo mysql_error();

}

?>