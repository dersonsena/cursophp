<?php 

if(isset($_POST['nome']) && isset($_POST['assunto'])) {
	
	$destinatario = 'seuemail@dominio.com.br';
	$assunto      = 'Envio de e-mail do curso de PHP';
	$mensagem     = "
		<p>Nome: {$_POST['nome']}</p>
		<p>E-mail: {$_POST['email']}</p>
		<p>Assunto: {$_POST['assunto']}</p>
		<p>Onde nos achou: {$_POST['pesquisa']}</p>
		<p>Mensagem: {$_POST['mensagem']}</p>
	";
	
	$headers = "MIME-Version: 1.0\r\n
				Content-type: text/html; charset=utf-8
				From: {$_POST['email']}\r\n
		        Reply-To: {$_POST['email']}\r\n
			    X-Mailer: PHP" . phpversion();

	// fazendo envio do email
	if(mail($destinatario, $assunto, $mensagem, $headers)) {
		echo "E-mail enviado com sucesso!";
	}
	
}

?>

<form action="" method="post">
    Nome: <input type="text" name="nome" /><br />
	E-mail: <input type="text" name="email" /><br />
	Assunto: <input type="text" name="assunto" /><br />
	Onde nos achou ? <input type="text" name="pesquisa" /><br />
	Mensagem: <textarea name="mensagem" id="mensagem" cols="5" rows="15"></textarea><br />
	<input type="submit" valeu="Enviar e-mail" />
</form>