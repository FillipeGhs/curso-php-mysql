<?php

function iniciaAula(){
// echo 'ola mundo';

//tipo numerico - int - long

//Tipo text(string) - classe string

//Tipo Logico(verdadeiro/falso)

// tipo objeto

$var = 1.2;

var_dump($var); //mostra o tipo da variavel



}


//iniciaAula(); //chama a função

$nome = "Fillipe";
$idade = 17;

$parametros = "?nome=" . $nome . "&idade=" . $idade;

//juntar os parametros na url base

$urlbase = "http://localhost/curso-php-mysql/aula-30-01-2023/arquivo.php";
$urlbase = $urlbase . $parametros;

$html =  '<a href="'.$urlbase . $parametros.'">Chamando Arquivo PHP </a';
echo $html;

//string
$urlBase = "http://localhost/curso-php-mysql/aula-30-01-2023/string.php";
$palavra ="arara";
$parametros = "?palavra=" . $palavra;

//juntar parametros na urlbase
$urlBase = $urlBase;

echo '<br><a href="' . $urlBase . $parametros . '">Chamando Arquivo String</a>';




