<?php
/*
is_array($array) = verificar se uma determinada variável é um array
in_array($valor, $array) = verifica se um determinado valor existe em alguma posição do array
array_keys($array) = retorna um novo array com as chaves do array passado como parâmetro
array_merge($array1, $array2) = agrega o conteúdo dos dois arrays
array_pop($array) = exclui  a última posição do array
array_shift($array) = exclui a primeira posição do array
array_unshift($arr, "valor") = adiciona um ou mais elementos no inicio do array
array_push($array, "valor", "valor") = adiciona um ou mais elementos no final de um array
array_combine($keys, $values) = mescla os dois arrays passados
array_sum() = calcula a soma dos elementos de um array
explode("/", "06/01/2001") = transforma string em array
implode("-", $arr) = transforma array em string
*/

// $nomes = array("Jefferson", "Breno Souza", "Talis", "José");

// if(is_array($nomes)):
//     echo "é um array".var_dump(is_array($nomes));
// else:
//     echo"não é um array".var_dump(is_array($nomes));
// endif;
// echo "<hr>";

//////////////////////////

// if(in_array("Jefferson", $nomes)):
//     echo "está no array".var_dump(in_array("Jefferson", $nomes));
// else:
//     echo"não está no array".var_dump(in_array("Jefferson", $nomes));
// endif;
// echo "<hr>";

// $nomes = array("Mãe"=>"Maria", "Pai"=>"José", "Filho"=>"João");
// $keys = array_keys($nomes);
// print_r($keys);

//  $values = array_values($nomes);
//  print_r($values);

// $bebidas = array("Água", "Suco natural de laranja", "Chá de hortelã");
// $comidas = array("Pão de forma integral", "Salada de frutas", "Crepioca com queijo");
// $misto = array_merge($bebidas, $comidas);
// print_r($misto);

// array_pop($nomes); exclui o ultimo elemento do array
// print_r($nomes);
// echo array_pop($nomes); mostra o elemento excluido do array

// array_shift($nomes); exclui o primeiro elemento do array
// print_r($nomes);
// echo array_shift($nomes); mostra o elemento excluido do array 

//  $frutas =  array("Abacaxi", "Banana", "Maçã", "Mamão", "Morango");
//  array_unshift($frutas, "Acerola", "Açaí", "Abacate"); insere elementos no inicio do array
//  print_r($frutas);

// $estoque = array("Mouse", "Teclado", "Headset");
// array_unshift($estoque, "SSD", "Memória RAM", "HD", "Placa Mãe");
// print_r($estoque);

// $keys = array("Mouse", "Teclado", "Headset");
// $values = array("Deathadder Elite", "Corsair strafe mx red", "Cloud Stinger");
// $items = array_combine($keys, $values);
// print_r($items);

// $soma = array(10, 20, 30);
// echo array_sum($soma);

// $data = "10/06/01";
// $novaData = explode('/', $data);
// print_r($novaData);
// echo "<br>";
// $frase = "Certamente não é o blitz";
// $novaFrase = explode(" ", $novaFrase)
// print_r($novaFrase);

// $nomes = array("Washington", "Jefferson", "Breno");
// $string = implode(", ", $nomes);
// echo $string;