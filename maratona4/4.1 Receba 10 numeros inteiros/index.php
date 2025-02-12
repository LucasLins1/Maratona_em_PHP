<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receba 10 números pares</title>
</head>
<body>
    
    <h2>Receba 10 números pares</h2>

    <?php 
    
    $numeros = array();

    for ($i=0; $i < 10 ; $i++) { 
     $numeros [] = rand(1, 50);
    }
    echo "Os números inteiros são: " . implode(", ", $numeros) . "<br>";
    
    $soma = 0;
    for ($i=0; $i < 10 ; $i++){
     $soma += $numeros[$i];
    }

    $media = $soma / 10;
    echo "A media dos numeros é: " . $media . "<br>";
    
    ?>

</body>
</html>