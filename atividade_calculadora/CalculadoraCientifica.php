<?php
require_once ("calculadoraEx01.php");

$oCalculadora->valor1 = 10;
$oCalculadora->valor2 = 2;

echo '<br>Numero 01:' . $oCalculadora->valor01;
echo '<br>Numero 02:' . $oCalculadora->valor02;

echo '<br>';

echo '<br>Fatorial:' . $oCalculadora->fatorial() . '<br>';