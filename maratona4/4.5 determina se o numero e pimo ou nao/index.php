<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Determine o numero primo</title>
</head>
<body>
    
<h2>Determine o numero primo</h2>

<?php 

function primos($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$numero = 3;
if (primos($numero)) {
    echo "$numero é um número primo.";
} else {
    echo "$numero não é um número primo.";
}

?>

</body>
</html>