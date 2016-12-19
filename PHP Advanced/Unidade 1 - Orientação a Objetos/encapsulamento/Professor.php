<?php

class Professor extends Funcionario {

	public function imprimirSalario() {
		//return 'O salário do professor é: ' . $this->salario;
		return 'O salário do professor é: ' . $this->getSalario();
	}

}