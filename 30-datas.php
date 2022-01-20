<?php
// Datas
date_default_timezone_set('America/Sao_Paulo');
// echo date('l d/m/Y H:i:s A');
// echo "<hr>";

$date = date('Y-m-d'); // DATE
$datetime = date('Y-m-d H:i:s'); // DATETIME
// echo $datetime;

echo "<br>";

// TIME
$time = time();
// echo date('d/m/Y', $time);

// MKTIME
$data_pagamento = mktime(13, 37, 00, 02, 15, 2022);
// echo date('d/m/y - h:i', $data_pagamento);

// STRTOTIME
$data = '2022-01-20 13:30:30';
$data = strtotime($data);

echo date('d/m/Y', $data);