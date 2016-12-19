<?php

class Conta {

	public $agencia;
	public $numero;
	public $titular;
	public $saldo;
	public $limite;
	
	public function sacar($valor) {
	
		if($valor < $this->saldo) {
			return 'Saldo insulficiente!';
		}
		
		$this->saldo -= $valor;
		return "Saque de R$ {$valor} realizado com sucesso!";
		
	}
	
	public function depositar($valor) {
		$this->saldo += $valor;
		return "Depósito de R$ {$valor} foi realizado com sucesso!";
	}
	
	public function imprimirTitular() {
		return $this->titular;
	}
	
	public function imprimirSaldo() {
		return $this->saldo;
	}

	public function transferir($valor, $contaOrigem, $contaDestino) {
		
		if($valor < $contaOrigem->saldo) {
			return 'Saldo da Conta de Origem é insulficiente!';
		}
		
		$contaOrigem->saldo -= $valor;
		$contaDestino->saldo += $valor;
		
		return "Transferência realizada com sucesso!";
		
	}

}