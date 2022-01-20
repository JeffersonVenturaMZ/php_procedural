<?php
session_start(); // inicia a sessão

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();