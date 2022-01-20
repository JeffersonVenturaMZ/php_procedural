<?php
session_start(); // inicia a sessão

$_SESSION['cor'] = "Preto"; // para criar uma sessão utilizamos a variável superglobal $_SESSION
$_SESSION['carro'] = "Honda Civic";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();