<?php
// Escopo global
$nome = "jefferson ventura";
$n1 = 10;
$n2 = 20;
$n3 = 30; 
function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
//////////////////////////

function exibeCidade(){
    global $cidade;
    $cidade = "Muzambinho";
}

exibeCidade();
echo $cidade;
echo "<hr>";
/////////////////////////

function soma(){
    echo $GLOBALS['n1'] + $GLOBALS['n2'] + $GLOBALS['n3'];
}

soma();
