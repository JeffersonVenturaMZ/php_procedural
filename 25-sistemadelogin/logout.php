<?php
// Encerrando a sessão
session_start(); // inicia
session_unset(); // termina
session_destroy(); // detrói
header('Location: index.php');