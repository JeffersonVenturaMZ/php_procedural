<?php
// Constantes - identificador para valor único
define("NOME", "Jefferson Ventura");
define("IDADE", "20");
define("ALTURA", 2.05);

define("TIMES", ['Chicago Bulls', 'Brooklyn nets', 'San Antonio Spyrs']);

echo 'Meu nome é '.NOME.' tenho '.IDADE.' anos e meço '.ALTURA;
echo "<hr>";
echo 'Meus times favoritos são '.TIMES[0].', '.TIMES[1].' e '.TIMES[2];
var_dump(TIMES);

function exibeNome(){
    echo NOME;
}
exibeNome();