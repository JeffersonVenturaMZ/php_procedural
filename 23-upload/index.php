<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_POST['enviar-formulario'])):    
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $quantidadeArquivos = count($_FILES['arquivo']['name']);
    $contador = 0;

    while($contador < $quantidadeArquivos):

        $extensao = PATHINFO($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION); //essa função pega a extensão de um arquivo
        
        if(in_array($extensao, $formatosPermitidos)):
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'][$contador];
            $novoNome = uniqid().".$extensao";

            if(move_uploaded_file($temporario, $pasta.$novoNome)):
                echo"Upload feito com sucesso para $pasta$novoNome<br>";
            else:
                echo "Erro, não foi possível fazer o upload do arquivo $temporario";
            endif;
        else:
            echo "$extensao não é permitada <br>";
        endif;
        $contador++;
    endwhile;
endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo[]" multiple><br> <!-- multiple permite selecionar mais de um arquivo para envio  -->
    <input type="submit" name="enviar-formulario">
</form>        
</body>
</html>