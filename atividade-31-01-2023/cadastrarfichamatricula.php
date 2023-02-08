<?php
function gravarfichamatricula($email_candidato, $nome_candidato, $cidade_candidato, $telefone_candidato, $curso_candidato){
    $candidato_atual = array();
    $candidato_atual["email"] = $$email_candidato;
    $candidato_atual["nome"] = $nome_candidato;
    $candidato_atual["cidade"] = $cidade_candidato;
    $candidato_atual["telefone"] = $telefone_candidato;
    $candidato_atual["curso"] = $curso_candidato;

    // Verificar se existe algum candidato gravado na lista de dados
    $arquivo = "listacandidatos.json";

    // Inicia a lista de candidatos vazia
    $lista_candidatos = array();
    if(file_exists($arquivo)){
        // Se existe candidato, adiciona os candidatos na lista
        $lista_candidatos = file_get_contents($arquivo);

        // Adicionar o novo candidato na lista de dados existente
        $lista_candidatos = json_decode($lista_candidatos, true);
    }

    // Adiciono o candidato atual no array de candidatos
    $lista_candidatos[] = $candidato_atual;

    $lista_candidatos_json = json_encode($lista_candidatos);

    file_put_contents("listacandidatos.json", $lista_candidatos_json);

    echo 'Candidato sendo gravado no sistema:<br>';
    //    echo '<pre>' . print_r($lista_candidatos, true) . '</pre>';
}

function inicia_pagina_candidato() {
    echo '<link rel="stylesheet" href="style.css">';
    echo '################Ficha de matricula############';
    echo '<br>';
}

function mostra_mensagem_candidato($email_candidato, $nome_candidato, $cidade_candidato, $telefone_candidato, $curso_candidato) {

    // Coloca a primeira letra da string em maiusculo
    $nome_candidato = ucfirst($nome_candidato);

    // Coloca a primeira letra de cada palavra na string em maiusculo
    $nome_candidato = ucwords($nome_candidato);

    $textoformacao = "FORMACAO BRANCO!!";
    $textovaga = "VAGA BRANCO!!";

    switch ($opcaoformacao) {
        case 1:
            $textoformacao = "Técnico em Agropecuária Integrado ao Ensino";
            break;
        case 2:
            $textoformacao = "Técnico em Agroecologia Integrado ao Ensino Médio";
            break;
        case 3:
            $textoformacao = "Técnico em Informática Integrado ao Ensino Médio";
            break;
        case 4:
            $textoformacao = "Técnico em Agropecuária Subsequente ao Ensino Médio";
            break;
        case 5:
            $textoformacao = "Agronomia";
            break;
        case 6:
            $textoformacao = "Engenharia Mecatrônica";
            break;
        case 7:
            $textoformacao = "Ciência da Computação";
            break;
        case 8:
            $textoformacao = "Licenciatura em Pedagogia";
            break;
        case 9:
            $textoformacao = "Licenciatura em Matemática";
            break;
        case 10:
            $textoformacao = "Licenciatura em Física";
            break;
        case 11:
            $textoformacao = "Pós-Graduação em Agronomia: Sistemas Agrícolas Rrgionais";
            break;
        case 12:
            $textoformacao = "Outros";
            break;
    }

    $nome_candidato = "<b>" . $nome_candidato . "</b>";
    $textoformacao = "<b>" . $textoformacao . "</b>";
    $textovaga = "<b>" . $textovaga . "</b>";
    $cpf_candidato = "<b>" . $cpf_candidato . "</b>";

    $frase_candidato = "Olá estudante " . $nome_candidato . " <br>
    Email:(" . $email_candidato.")<br> Seja bem vindo a nossa Faculdade!<br>
    Através do seu curso (" . $curso_candidato . "), <br>
    faremos o possível para lhes encaixar no curso
    que você se candidatou.<br>
    Vaga de curso solicitada: (" . $curso_candidato . ").";

    echo "<p>" . $frase_candidato . "</p>";

    $botao_voltar = "<a href='index.php'>Voltar</a>";

    echo $botao_voltar;
}

$email_candidato = $_GET["email"];
$nome_candidato = $_GET["nome"];
$cidade_candidato  = $_GET["cidade"];
$telefone_candidato = $_GET["telefone"];
$curso_candidato   = $_GET["opcaocurso"];

inicia_pagina_candidato();

mostra_mensagem_candidato($email_candidato, $nome_candidato, $cidade_candidato, $telefone_candidato, $curso_candidato);

grava_ficha_candidato($email_candidato, $nome_candidato, $cidade_candidato, $telefone_candidato, $curso_candidato);