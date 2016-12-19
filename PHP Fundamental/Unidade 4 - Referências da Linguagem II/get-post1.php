<?php 

if(isset($_GET['nome']) && isset($_GET['idade'])) {
	echo "Seu nome é: " . $_GET['nome'] . '<br />';
	echo "Sua idade é: " . $_GET['idade'];
}

?>

<form action="" method="get">
    Nome: <input type="text" name="nome" /><br />
	Idade: <input type="text" name="idade" /><br />
	<input type="submit" value="Enviar" />
</form>