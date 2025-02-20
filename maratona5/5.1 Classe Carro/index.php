<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e objetos</title>
</head>
<body>
    
    <h2>Classe carro</h2>

    <?php
    
    class Carro {
        public $modelo;
        public $ano;
        public $cor;
        public $preco;

        public function exibirInfo() {
            echo "Meu carro é um " . $this->modelo . " do ano " . $this->ano . ", ele e de cor " . $this->cor . " é custou: " . $this->preco;  
        }
    }

    $meuCarro = new Carro;
    $meuCarro->modelo = "Camaro";
    $meuCarro->ano = 2017;
    $meuCarro->cor = "Amarelo";
    $meuCarro->preco = "R$ 345.000";

    $meuCarro->exibirInfo();
    
    ?>

</body>
</html>