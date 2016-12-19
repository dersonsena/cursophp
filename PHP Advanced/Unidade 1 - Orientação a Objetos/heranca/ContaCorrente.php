<?php

class ContaCorrente extends Conta {
	
	public taxaServico = 7.85;
	
	public function emitirCheques($quantidade) {
		
		$string = '';
		
		for($i=1; $i<=$quantidade; $i++) {
			$string .= "Cheque de número {$i} emitido com sucesso!";
		}
		
		return $string;
		
	}
	
	public function pagarConta($nomeConta, $valor) {
		
		if($valor < $this->saldo) {
			return 'Saldo insulficiente!';
		}
		
		$this->saldo -= $valor;
		return "O pagamento de {$nomeConta} de R$ {$valor} realizado com sucesso!";
		
	}
	
	public function imprimirTaxaServico() {
		return $this->taxaServico;
	}

}

?>