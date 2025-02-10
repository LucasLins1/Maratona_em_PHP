<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos de compra</title>
</head>
<body>

    <h2>Pedidos de compra</h2>

<?php 
    $pedidos = 0;

    echo "Pedidos: <br><br>";

    do {
        $pedidos++;
        echo "O pedido de número $pedidos está em processo. <br><br>";
        
    } while ($pedidos < 15);
        
    
    echo "Sem pedidos pendentes.";

    ?>
    
</body>
</html>