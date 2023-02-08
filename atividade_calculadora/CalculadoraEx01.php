<?php

class calculadora {
    public $valor1;
    public $valor2;

    public function somar(){
        return $this->valor1 + $this->valor2; 
    }
    public function subtrair(){
        return $this->valor1 - $this->valor2;
    }
    public function multiplicar(){
        return $this->valor1 * $this->valor2;
    }
    public function dividir(){
        return $this->valor1 / $this->valor2;
    }
}



