<?php

abstract class ClasseAbstrata {

    // Força a classe que estende ClasseAbstrata a definir esse método
    abstract protected function pegarValor();
    abstract protected function valorComPrefixo($prefixo);

    // Método comum
    public function imprimir() {
        print $this->pegarValor();
    }
	
}

?>