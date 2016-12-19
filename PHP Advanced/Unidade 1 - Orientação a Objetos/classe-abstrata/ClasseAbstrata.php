<?php

abstract class ClasseAbstrata {

    // For�a a classe que estende ClasseAbstrata a definir esse m�todo
    abstract protected function pegarValor();
    abstract protected function valorComPrefixo($prefixo);

    // M�todo comum
    public function imprimir() {
        print $this->pegarValor();
    }
	
}

?>