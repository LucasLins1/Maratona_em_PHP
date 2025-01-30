<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão de dados do usuario</title>
</head>
<body>

    <h2>Impressão de dados do usuario</h2>

    <?php 
    
    $nome = "João";
    $idade = 25;
    $cidade = "São Paulo";

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$cidade <br>";

    echo "<br>";

    echo " Meu nome é " . $nome . ", tenho " . $idade . " anos e moro em " . $cidade;
    
    ?>
    
</body>
</html>