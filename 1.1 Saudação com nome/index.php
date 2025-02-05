<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação com nome</title>
</head>
<body>

<h2>Saudação com nome</h2>

<?php 

$nome = "João";
$saudacao = "! Bem-vindo ao nosso site!";

echo "$nome! <br>";
echo "Olá, " . $nome . $saudacao;

?>
    
</body>
</html>