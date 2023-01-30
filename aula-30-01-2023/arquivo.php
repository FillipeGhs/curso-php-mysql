<?php

echo 'Inicio do arquivo.php';

echo ' pegando dados dos parametros da url';

$nome_parametro = $_GET["nome"];
$idade_parametro = $_GET["idade"];

$frase = "Meu nome é " . $nome_parametro . '
e tenho ' . $idade_parametro . ' anos de idade ';

echo '<br><br>' . $frase;

$nome_parametro = "NOME EM BRANCO";
$idade_parametro = "IDADE EM BRANCO";

$validaDados = true;

if(isset($_GET["nome"])){
$nome_parametro = $_GET["nome"];
} else {
    $validaDados = false;
}
if(isset($_GET["idade"])){
    $idade_parametro = $_GET["idade"];
} else {
    $validaDados = false;
}

// se a validação de dados for true:
    if($validaDados) {
        $frase = "Meu nome é " . $nome_parametro . ' e tenho ' . $idade_parametro . ' anos!';
        echo $frase;
    } else {
        echo 'Parametros Inválidos!';
    }