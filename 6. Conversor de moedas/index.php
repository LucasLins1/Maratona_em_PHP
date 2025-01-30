<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
</head>
<body>

    <h2>Conversor de moedas</h2>

    <?php
    
    $reais = 20.80;
    $dolar = 5.93;
    $conversao = $reais * $dolar;
    $preco_formatado = number_format($conversao, 2, ',', '.');

    echo "o valor do real em dolar será de $preco_formatado";

    ?>
    
</body>
</html>