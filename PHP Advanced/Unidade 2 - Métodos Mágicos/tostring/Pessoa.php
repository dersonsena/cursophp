<?php

class Pessoa {
 
    private $nome;
    private $idade;
 
    public function __construct($nome) { 
		$this->nome = $nome;
	}
 
    public function __toString() {
		return $this->nome;
	}
 
}

?>