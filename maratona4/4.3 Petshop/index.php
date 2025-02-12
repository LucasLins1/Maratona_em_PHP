<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
</head>
<body>
    
<h2>Petshop</h2>

<?php 

$idades = [
    "sabão tem" => "3 anos",
    "a raça e" => "siamês",
    "valor do gato" => "R$499,99",
];

foreach($idades as $nome => $idade){
    echo "$nome  $idade <br>";
};

?>

</body>
</html>