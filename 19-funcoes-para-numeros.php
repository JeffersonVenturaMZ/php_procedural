<?php
// Funções para Números
/*
    number_format
    round
    ceil
    floor
    rand
*/

$db = 1234.56;
$preco = number_format($db, 2, ",", "."); //formata o numero conforme os parâmetros passados
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(99.6); // essa função arredonda valores
echo "<br>";
echo ceil(9.1); // essa função arredonda sempre para cima
echo "<br>";
echo floor(55.9); // essa função arredonda sempre para baixo

echo "<hr>";

echo rand(1, 100); // essa função sorteia um número aleatório conforme os parâmetros passados