<?php

class ClasseConcreta2 extends ClasseAbstrata {

    protected function pegarValor() {
        return "ClasseConcreta2 - Pegando valor com jeito Y";
    }

    public function valorComPrefixo($prefixo) {
        return "{$prefixo} ClasseConcreta2";
    }
	
}

?>