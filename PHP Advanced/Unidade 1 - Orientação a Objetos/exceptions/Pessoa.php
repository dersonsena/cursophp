<?php

class Pessoa {

	public $nome;
	public $idade;
	public $peso;
	
    public function imprimirDados() {
        
        if(is_null($this->nome)) {
            throw new MeuException('Digite o nome.');
        }
        
        if(is_null($this->idade)) {
            throw new MeuException('Digite a idade.');
        }
        
        if(is_null($this->peso)) {
            throw new MeuException('Digite seu peso.');
        }
        
        echo 'Nome: ' . $this->nome . ' - Peso: ' . $this->peso . ' - Idade: ' . $this->peso;
        
    }
    
}

?>