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
    public function fatorial(){
        $n = this->valor1;

        $contador = $n;
        $resultado = 1;

        while($contador > 0) {
            $resultado = $resultado * $contador;
            echo '<br> contador:' . $contador . ' resultado:' . $resultado;

            $contador--;
        }
        return $resultado;

        }
    }



