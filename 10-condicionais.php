<?php
/*
Condicionais:
if
else
elseif
switch
case
*/


// $numero = 10; 
// if($numero == 10):
//     echo "É igual 10";
// elseif($numero <= 9):
//     echo "É menor ou igual a 9";
// else:
//     echo "É diferente de 10";     
// endif;    


// $media = 6;
// echo ($media >= 7) ? "Aprovado!" : "Reprovado!"; // ? representa o if e : representa o else

$cor = "vermelho";

switch ($cor):
    case "vermelho":
        echo "Sua cor preferida é vermelho";
    break;

    case "azul":
        echo "Sua cor preferida é azul";
    break;

    case "amarelo":
        echo "Sua cor preferida é amarelo";
    break;

    default:
    echo "Sua cor preferida não é vermelho, azul ou amarelo";
endswitch;    


