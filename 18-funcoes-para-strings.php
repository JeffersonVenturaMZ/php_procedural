<?php
// Funçoes para Strings
/*
    strtoupper
    strtolower
    substr
    str_pad
    str_repeat
    strlen
    str_replace
    strpos
*/

$nome1 = "lebron james";
$nome2 = "MICHAEL JORDAN";
$novoNOME = strtoupper($nome1); //Deixa a string em maiúsculo
$novoNome = strtolower($nome2); //Deixa a string em minúsculo
echo $novoNOME;
echo "<br>";
echo $novoNome;

echo "<hr>";

$mensagem = "Olá, mundo!";
echo substr($mensagem, 5); //Retorna a string a partir do 5 caracter

echo "<hr>";

$objeto = "Razer";
$novoObjeto = str_pad($objeto, 10, "Mouse", STR_PAD_LEFT);
// $novoObjeto = str_pad($objeto, 10, "Mouse", STR_PAD_RIGHT);
// $novoObjeto = str_pad($objeto, 15, "Mouse", STR_PAD_BOTH);
echo $novoObjeto;

echo "<hr>";

$string = str_repeat("jefferson ", 5); // repete a string quantas vezes você definir
echo $string;

echo "<hr>";

$mensagem = "Olá mundo!";
echo strlen($mensagem); // retorna o tamanho da string

echo "<hr>";

$texto = "Michael Jordan's the goat";
$novoTexto = str_replace("Michael Jordan", "Lebron James", $texto); // substitui o texto da string com o texto que você quer
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "goat"); // retorna a posição em que a palavra está