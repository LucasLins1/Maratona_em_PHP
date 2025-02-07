<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
</head>
<body>

    <h2> Operadores Lógicos </h2>

    <?php
    
    $funcionario = true;
    $cadastroAtivo = true;
    $admin = false;

    echo ($funcionario && $cadastroAtivo || $admin) ? "Acesso Permitido!" : "Acesso Negado!";

    echo "<br>";



?>
    
</body>
</html>