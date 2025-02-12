<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 peças de carro</title>
</head>
<body>

<h2>10 peças de carro</h2>

    <?php 
    
   $carr = ["motor", "bateria", "suspesão", "freio", "embreagem", "radiador", "alternador", "pneus", "farós", "escapamento"];

   foreach($carr as $carr){
    echo $carr . "<br>"; //Imprime o nome de cada peça
};

    ?>
</body>
</html>