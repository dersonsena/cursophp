<?php

class Classe {

	private $nome;
	
	public function __construct() {
		echo "INICIEI";
	}
	
	public function __destruct() {
		echo "ENCERREI!";
	}

}

?>