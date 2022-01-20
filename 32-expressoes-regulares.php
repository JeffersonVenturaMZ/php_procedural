<?php
// Expressões regiçares
/*
Define um padrão a ser usado para procurar ou
substituir palavras ou grupo de palavras.
// ^ inicio da expressão, $ final da expressão - /i - case sensitive
// [] conjunto de caracteres
// {} ocorrências - ?{0,1} *{0,} +{1,}
// /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|br|com.br|net)$/
// /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
[A-Z] Letras maiúsculas
[a-z] Letras minúsculas
[A-Za-z] Letras maiúsculas e minúsculas
[A-Za-z0-9] Letras e número
*/

$string = "3/99/2020";
// $padrao = "/^a/"; Inicio da string
// $padrao = "/^abc$/"; Fim da string
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/"; 

if(preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;
