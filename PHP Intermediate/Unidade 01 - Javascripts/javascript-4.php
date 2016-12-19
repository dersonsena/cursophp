<html>
	<head>
		<title>Javascripts</title>
		
		<script type="text/javascript">
		
			function validar() {
				
				var nome  = document.getElementById('nome');
				var cpf   = document.getElementById('cpf');
				var email = document.getElementById('email');
				
				if(nome.value == '') {
					alert('Campo NOME é obrigatório.');
					nome.focus();
					return false;
				}
				
				if(cpf.value == '') {
					alert('Campo CPF é obrigatório.');
					cpf.focus();
					return false;
				}
				
				if(email.value == '') {
					alert('Campo E-MAIL é obrigatório.');
					email.focus();
					return false;
				}
				
				return true;
				
			}
			
		</script>
		
	</head>
	<body>
		
		<form name="frm-dados" id="frm-dados" action="" onsubmit="return validar()">
	
			<p>
				<label for="nome">* Nome:</label>
				<input type="text" id="nome" name="nome" value="" />
			</p>
			
			<p>
				<label for="cpf">* CPF:</label>
				<input type="text" id="cpf" name="cpf" value="" />
			</p>
			
			<p>
				<label for="email">* E-mail:</label>
				<input type="text" id="email" name="email" value="" />
			</p>
			
			<p><button type="submit" name="btn-enviar">Enviar dados</button></p>
			
		</form>
		
	</body>
</html>