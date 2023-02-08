<?php

//ficha de matricula

echo "Ficha de Matricula";
echo '<br>';

$css_arquivo= '<link rel="stylesheet" href="Style2.css">';

$html_formulario = '
    <form action="cadastrarfichamatricula.php" method="get">
        <label>Email:</label>
        <input type="text" name="Email" value="">
        <br>
        <label>Nome:</label>
        <input type="text" name="nome" value="">
        <br>
        <label>Cidade:</label>
        <select name="Cidade">
            <option value="1">Ituporanga</option>
            <option value="2">Rio do sul</option>
            <option value="3">Lontras</option>
            <option value="4">Bela vista</option>
            <option value="5">Imbuia</option>
            <option value="6">Imbuia </option>
        <br>
        <label>Telefone:</label>
        <input type="text" name="Telefone" value="">
        <br>
        <label>Telefone:</label>
        <input type="text" name="Telefone" value="">
        <br>
        <br>
        <label>Tenho interesse no seguinte curso:</label>
        <ul>
        <li><input type="checkbox" name="1">Técnico em Agropecuária Integrado ao Ensino Médio</li>
        <li><input type="checkbox" name="2">Técnico em Agroecologia Integrado ao Ensino Médio</li>
        <li><input type="checkbox" name="3">Técnico em Informática Integrado ao Ensino Médio</li>
        <li><input type="checkbox" name="4">Técnico em Agropecuária Subsequente ao Ensino Médio</li>
        <li><input type="checkbox" name="5">Técnico em Agrimensura Subsequente ao Ensino Médio</li>
        <li><input type="checkbox" name="6">Agronomia</li>
        <li><input type="checkbox" name="7">Engenharia Mecatrônica</li>
        <li><input type="checkbox" name="8">Ciência da Computação</li>
        <li><input type="checkbox" name="9">Licenciatura em Pedagogia</li>
        <li><input type="checkbox" name="10">Licenciatura em Matemática</li>
        <li><input type="checkbox" name="11">Licenciatura em Física</li>
        <li><input type="checkbox" name="12">Pós-Graduação em Agronomia: Sistemas Agrícolas Rrgionais</li>
        <label>Outros:</label>
        <input type="text" name="Outros" value"">
        </ul>
        <br>
        <input type="submit" value="Confirmar">
    </form>    
';

echo $css_arquivo . $html_formulario;

