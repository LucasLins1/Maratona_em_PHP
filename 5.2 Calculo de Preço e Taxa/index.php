<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Preço e Entrega</title>
</head>
<body>
    
    <h2> Cálculo de Preço e Entrega </h2>    
    
    
    <?php      
    
    $Compra = 1600;
    $taxaEntrega = $Compra * 0.15;
    $valorFinal = $Compra + $taxaEntrega;

    if($Compra > 1000) {

        $precoDesconto = $Compra * 0.20;
    
        echo " O valor final de sua compra foi de R$: $valorFinal";

    }else {

        $precoDesconto = 0;
        echo " O valor de sua compra foi de R$: " . number_format($valorFinal, 2, ',', '.');

    }
 
    ?>
</body>
</html>