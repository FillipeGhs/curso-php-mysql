<?php

class Carro {
    public $modelo;
    public $cor;
    public $quantidadePortas;
    public $preço;

    public function __construct($preco = false) {
        if(preco){
            $this->preco = $preco;
        }
    }

    public function mostraPreco(){
        $this->preco = isset($this->preco) ? $this->preco : "0,00";

        echo 'preço do carro:' . $this->preco;
    }

    public function ligar(){
        echo 'Carro Ligado';
    }

    public function desligar(){
        echo 'Carro desligado';
    }

    public function insereModelo($modelo){
        $this-> modelo = $modelo;
    }

    public function mostraModelo(){
        return $this->modelo;
    }
}