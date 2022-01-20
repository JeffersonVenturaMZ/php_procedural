<?php
// Arrays
$tenis = array(1 => "Air jordan 1 chicago", 2 => "Lebron witness VI", 3 => "Paul George 3 oreo");
$tenis[] = "Air Force 1";
$tenis[10] = "Chuck Taylor";

$carros = array();
$carros[] = "Uno";
$carros[] = "Gol";
$carros[5] = "Fusca";

$motos = ["Suzuki", "Honda", "Yamaha"];

// função para exibir arrays
print_r($tenis);
echo "<hr>";

print_r($carros);
echo "<hr>";

print_r($motos);
echo "<hr>";
// especificar indice
// echo $tenis[0];
// echo "<hr>";

// Contar elementos de um array
$totalTenis = count($tenis);
echo $totalTenis;
echo "<hr>";

// Foreach para percorrer o array
foreach($tenis as $valor){
    echo $valor."<br>";
}
echo "<hr>";

// Arrays associativos
$pessoa = array("nome"=> "Jefferson Ventura", "idade" => 20, "altura" => 2.05);
$pessoa["cidade"] = "Muzambinho";
print_r($pessoa);

foreach($pessoa as $indice => $valor){
    echo $indice." : ".$valor."<br>";
}
echo "<hr>";
//Arrays multidimensionais - possui um ou mais arrays
$times = array(
    "Minas Gerais"=> array("Série B"=>"América mineiro", "Série A"=> "Atlético mineiro", "Boa Esporte", "Caldense", "Cruzeiro"),
    "Paulistas"=> array("Corinthians", "Palmeiras", "Santos", "São Paulo")
);
echo $times["Minas Gerais"]["Série A"];
echo "<br>";
echo "<hr>";

foreach($times["Minas Gerais"] as $indice => $valor){
    echo $indice." : ".$valor."<br>";
}