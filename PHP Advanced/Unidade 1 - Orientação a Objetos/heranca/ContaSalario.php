<?php

class ContaSalario extends Conta {

	public function depositar($valor) {
		return "Conta salário não pode efetuar depósito.";
	}

}

?>