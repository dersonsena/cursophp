<?php

class Moto implements AutoMotor {

    private $motorLigado = false;
    private $velocidade  = 0;

    public function ligar() {
        $this->motorLigado = true;
    }
	
    public function desligar() {
        $this->motorLigado = false;
    }
	
    public function acelerar() {
        $this->velocidade++;
    }
	
    public function freiar() {
        $this->velocidade--;
    }
	
    public function estaLigado() {
        return $this->motorLigado;
    }
	
	public function getVelocidade() {
		return $this->velocidade;
	}
	
}

?>