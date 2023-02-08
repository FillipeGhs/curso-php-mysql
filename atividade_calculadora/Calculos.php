<?php

require_once ("calculadoraEx01.php");
$oCalculadora = new Calculadora();

$oCalculadora-> valor1 = 2;
$oCalculadora-> valor2 = 5;

echo 'Somar' . $oCalculadora->somar().'<br>';
echo 'Subtração' . $oCalculadora->subtrair(). '<br>';
echo 'Multiplicação' . $oCalculadora->multiplicar(). '<br>';
echo 'Divisão' . $oCalculadora->dividir(). '<br>';


<?php


