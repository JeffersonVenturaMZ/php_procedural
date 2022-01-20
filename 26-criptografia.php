<?php
// $novaSenha = base64_encode($senha);
// echo "base64: ".$novaSenha."<br>"; //criptografa a senha
// echo "Sua senha é: ".base64_decode($novaSenha); //descriptografa a senha

// echo "<hr>";

// echo "Md5: ".md5($senha)."<br>";
// echo "Sha1: ".sha1($senha);

$senha = "123456";
$senha_db = '$2y$13$V2.2fVY8481GBkvHLrQVKOB0nOzBgQWPF1h0GVIGJe0TWCsZfZx5K';
// $options = [
//     'cost' => 10
// ];
// $senhaSegura = password_hash($senha, PASSWORD_DEFAULT, $options);
if(password_verify($senha, $senha_db)):
    echo "Senha válida";
else:
    echo "Senha inválida";
endif;