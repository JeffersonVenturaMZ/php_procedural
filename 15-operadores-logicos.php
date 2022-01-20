<?php
/*
Operadores lógicos
Nos permitem  fazer comparações entre expressões
e (&& - and)
ou (|| - or)
ou exclusivo (xor)
negação (!)
*/

$idade = 20;
$nome = "Jefferson";

if(!($idade == 21) and !($nome == "Joao")):
    echo "Verdadeiro";
else:
    echo "Falso";    
endif;    