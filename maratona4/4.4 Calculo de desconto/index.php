<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de desconto</title>
</head>
<body>
    
<h2>Calculo de desconto</h2>

<?php 

$preçoproduto = 200;
$descontos = "15%";

echo "O valor do pruduto e de: R$" . $preçoproduto . " e o desconto sera de: " . $descontos;
echo "<br>";

function desconto($a, $b){
    return $a * $b;
}

$resultado = desconto(200, 0.15);
echo "O desconto será de: R$" . $resultado;

function desconto1($a, $b){
    return $a - $b;
}

echo "<br>";

$resultado1 = desconto1(200, 30);
echo "O valor final é de: R$" . $resultado1;
?>

</body>
</html>