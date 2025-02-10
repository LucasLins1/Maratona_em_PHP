<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimo bancário</title>
</head>
<body>
    
    <h2>Empréstimo bancário</h2>

    <?php
    
    $emprestimo = 7000;
    $juros = 1 + 7.5 / 100;
    $parcelas = 10;
    $resultado = $emprestimo * $juros / $parcelas;

    echo "O emprestimo será de $resultado";

    ?>

</body>
</html>