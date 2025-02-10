<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Conversão de temperatura (Celsius para fahrenheit)</title>
</head>
<body>

    <h2>Conversão de temperatura (Celsius para fahrenheit)</h2>

    <?php 

    $celsius = 32;
    $fahrenheit = ( $celsius * 9 / 5 ) + 32;
    
    echo "A temperatura em celsius " . $celsius . " é igual a " . $fahrenheit . " fahrenheit.";

    ?>

</body>
</html>