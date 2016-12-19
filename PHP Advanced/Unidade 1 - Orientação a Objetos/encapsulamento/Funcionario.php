<?php

// 01 - Declarar somente os atributos para fazer o teste no index
// 02 - Faz o metodo set e get comum de cada atributo
// 03 - Para testar o protected e private, implementar a logica do setSalario, e trocar a 
//      visibilidade para ver os resultados que serao mostrados
// Encapsulamento

class Funcionario {

	private $codigo;
	private $nome;
	private $salario;
	
	//private function setSalario($valor) {
	public function setSalario($valor) {
	
		// Antes de passar o valor do salario verificamos se o mesmo e 
		// um numero e positivo, se sim, passamos o valor para o atributo 
        if (is_numeric($valor) && ($valor > 0)) { 
			$this->salario = $valor; 
        } 

	}
	
	public function getSalario($valor) {
		return $this->salario;
	}
	
	public function getNome() {
		return $this->nome;
	}
	
	public function setNome($nome) {
		$this->nome = $nome;
	}

}

?>