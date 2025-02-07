<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Matemático</title>
</head>
<body>

    <h2>Calculo Matemático</h2>

    <?php 
    
    $compra = 1000;

    function calcularvalorfinal($compra) {
    $imposto = $compra * 0.08;
    

    if($compra > 500) {
        $desconto = $compra * 0.10;
}   else {
    $desconto = 0;
}

    $valorfinal = ($compra - $desconto) + $imposto;
    return $valorfinal;
} 
    
    $valorfinal = calcularvalorfinal($compra);
    echo "o preço final do produto é: R$" . number_format($valorfinal, 2, ',', '.');

    ?>
    
</body>
</html>