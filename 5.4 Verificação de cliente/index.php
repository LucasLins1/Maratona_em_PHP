<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Cliente</title>
</head>
<body>
    
    <h2>Verificação de Cliente</h2>

    <?php 
    
    $senhacorreta = 1234;
    $tentativas = 0;
    $maxtentativa = 3;
    
    while ($tentativas < $maxtentativa) {

        echo "digite a senha: ";
        $usuarioSenha = ""; 
        $tentativas++;

        echo "<br>";

        if ( $usuarioSenha === $senhacorreta) {
            echo "acesso concedido. ";
            break;
            
        } else {

            echo ( $usuarioSenha !== $senhacorreta )? "acesso negado! <br><br> " : "Acesso permitido";
        } 
    }
    
    ?>

</body>
</html>