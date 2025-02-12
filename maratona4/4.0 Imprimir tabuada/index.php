<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir tabuada</title>
</head>
<body>
    
    <h2>Imprimir Tabuada</h2>

    <?php 

    $a = 1;
    
    for ($b = 8;  $a <= 10 ; $a++){
        echo "A multiplicação da tabela $b * $a é: " . ($b * $a) . "<br>";
    }
    

    ?>

</body>
</html>