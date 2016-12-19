<html>
	<head>
		<title>Javascripts</title>
		
		<script type="text/javascript">
		
			function alterarCor(cor) {
				
				var p = document.getElementById('caixa-cor');
				
				switch(cor) {
					case 'verde'    : p.style.background = 'green'; break;
					case 'vermelho' : p.style.background = 'red'; break;
					case 'azul'     : p.style.background = 'blue'; break;
					case 'amarelo'  : p.style.background = 'yellow'; break;
				}
				
			}
			
		</script>
		
	</head>
	<body>
		
		<p id="caixa-cor" style="border: 1px solid #ccc; padding: 10px;">Aperte uns dos botoes abaixo para mudar a cor</p>
		
		<div>
			<button id="btn-verde" onclick="alterarCor('verde')">Verde</button>
			<button id="btn-vermelho" onclick="alterarCor('vermelho')">Vermelho</button>
			<button id="btn-azul" onclick="alterarCor('azul')">Azul</button>
			<button id="btn-amarelo" onclick="alterarCor('amarelo')">Amarelo</button>
		</div>
		
	</body>
</html>