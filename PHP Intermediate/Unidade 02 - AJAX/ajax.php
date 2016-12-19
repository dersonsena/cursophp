<html>
	<head>
		<title>Javascripts</title>
		
		<script type="text/javascript">
		
			function createRequest(url) {
    	
				var request = null;
				
				// instancia o objeto XMLHttpRequest
				request = new XMLHttpRequest();
				
				// Abre a conexão -- open(method, url, async)
				request.open("POST", url, true);
				
				// Configurando o requestHeader antes de realizar a requisição -- setRequestHeader(header, value)
				request.setRequestHeader('Content-Type', 'text/html');

				return request;
				
			};
			
			function pegarInformacoes() {
				
				var req         = createRequest('ajax-destino.php');
				var divLoading  = document.getElementById('loading');
				var divResposta = document.getElementById('caixa-resposta');
				
				divLoading.innerHTML = 'Carregando dados...';
				
				req.onreadystatechange = function() {
					
					divLoading.innerHTML = '';
					
					if (req.readyState == 4) {
						divResposta.innerHTML = req.responseText;
					}
				};
				
				req.send(null);
				
			}
			
			window.onload = function() {
				pegarInformacoes();
			}
			
		</script>
		
	</head>
	<body>
		
		<div id="loading"></div>
		<div id="caixa-resposta"></div>
		
	</body>
</html>