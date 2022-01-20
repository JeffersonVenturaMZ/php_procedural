<?php
/* Escalares */
// String
$nome = "Jefferson Ventura"; // string
// $nome = "1337" string
// $nome = 1337 int
var_dump($nome);
// validar o tipo de dado
if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;        
echo "<hr>";

// int 
$idade = 20;
var_dump($idade);
if(is_int($idade)):
    echo "É do tipo inteiro";
else:    
    echo "Não é do tipo inteiro";
endif;
echo "<hr>";    

// float
$altura = 2.05;
var_dump($altura);
if(is_float($altura)):
    echo "É do tipo float";
else:    
    echo "Não é do tipo float";
endif;
echo "<hr>";  

// boolean
$admin = false;
var_dump($admin);
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é booleano";
endif;
echo "<hr>";

/************Compostos*************/
$carros = array ("Gol", "Uno", "Saveiro", 1337, 999.0, true);
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

// object 
class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}
$cliente = new Cliente();
$cliente->atribuirNome("Jefferson");
var_dump($cliente);
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";

/************Especiais*************/
// NULL
$cidade = NULL;
var_dump($cidade);

// Resource