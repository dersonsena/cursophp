<?php

class Professor extends Funcionario {

	public function imprimirSalario() {
		//return 'O sal�rio do professor �: ' . $this->salario;
		return 'O sal�rio do professor �: ' . $this->getSalario();
	}

}