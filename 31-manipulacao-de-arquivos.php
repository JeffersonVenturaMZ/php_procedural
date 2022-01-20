<?php
// Manipulação de arquivos 
/*
fopen()
fclose()
fwrite()
!feof()
fgets()
filesize()
 */

$arquivo = 'arquivo.txt';
$conteudo = "Jefferson Ventura\r\n";
$tamnhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'r');
// fwrite($arquivoAberto, $conteudo);

while(!feof($arquivoAberto)):
    $linha = fgets($arquivoAberto, $tamnhoArquivo);
    echo $linha."<br>";
endwhile;

fclose($arquivoAberto);