<?php 

if(isset($_POST['nome']) && isset($_POST['idade'])) {
	echo "Seu nome �: " . $_POST['nome'] . '<br />';
	echo "Sua idade �: " . $_POST['idade'] . '<br />';
}

?>

<form action="" method="post">
    Nome: <input type="text" name="nome" /><br />
	Idade: <input type="text" name="idade" /><br />
	<input type="submit" value="Enviar" />
</form>