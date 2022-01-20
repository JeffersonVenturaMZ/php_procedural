<?php
// Criando funções

function exibirNome($nome){ // cria a função e recebe o nome como parâmetro
    echo "Meu nome é $nome";
}

exibirNome("Jefferson"); // exibe a função

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    if($media>=7):
        echo "$nome foi aprovado com a média $media.";
    else:
        echo "$nome foi reprovado.";
    endif;
}

calcularMedia("João", 8,8,6,6);

