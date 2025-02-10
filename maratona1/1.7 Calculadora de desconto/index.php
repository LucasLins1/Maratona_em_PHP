<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de desconto</title>
</head>
<body>
    
    <h2>Calculadora de desconto</h2>

    <?php 

    $desconto = 10;
    $preco_original = 400.45;
    $preco_desconto = $preco_original - ($preco_original * $desconto / 100);
    $preco_formatado = number_format($preco_desconto, 2, ',', '.');

    echo "O preço do produto será de $preco_formatado reais";

    ?>

</body>
</html>