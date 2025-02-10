<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenttivas de Login</title>
</head>
<body>
    
<h2> Tentativas de Login </h2>

    <?php 


$senhaCorreta = "15246";
$tentativas = 0;
$Max = 3;

 do {

    echo "Digite a Senha: ";
    $senhaUsuario = "15246";
    $tentativas++;
    echo "<br>";

    if ($senhaUsuario === $senhaCorreta){

        echo "acessando login.";
        break;
        
        echo "<br>";

    } else {

        echo "Senha incorreta. Você tem " . ( $Max - $tentativas ) . " tentativas restantes";
        echo "<br>";

    }
    
 } while ( $tentativas < $Max);

 if ( $tentativas === $Max && $senhaUsuario !== $senhaCorreta){

        echo "você ultrapassou o limite de tentatvas. Acesso negado.";


 }

 
 

 ?>



</body>
</html>