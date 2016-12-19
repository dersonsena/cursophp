<?php

class ClasseConcreta1 extends ClasseAbstrata {
	
	protected function pegarValor() {
        return "ClasseConcreta1 - Pegando o valor do jeito X";
    }

    public function valorComPrefixo($prefixo) {
        return "{$prefixo} ClasseConcreta1";
    }

}

?>