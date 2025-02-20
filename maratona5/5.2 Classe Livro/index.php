<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe e Objeto</title>
</head>
<body>

    <h2>Classe Livro</h2>

    <?php 
    
    class Livro {
        public $titulo;
        public $autor;
        public $anoPublicação;
        
        public function exibirInfo() {
            echo "Titulo: " . $this->titulo . "<br>";
            echo "Autor: " . $this->autor . "<br>";
            echo "Ano de Publicação: " . $this->anoPublicação . "<br>";
        }
    }
    
    $meuLivro = new Livro();
    $meuLivro->titulo = "O Pequeno Principe";
    $meuLivro->autor = "Antoine de Saint-Exupéry";
    $meuLivro->anoPublicação = 1943;

    $meuLivro->exibirInfo();

    echo "<br>";

    $meuLivro1 = new Livro();
    $meuLivro1->titulo = "O Ladrão de raios";
    $meuLivro1->autor = "Rick Riordan";
    $meuLivro1->anoPublicação = 2005;

    $meuLivro1->exibirInfo();

    echo "<br>";
    
    $meuLivro2 = new Livro();
    $meuLivro2->titulo = "Harry Potter e a Pedra Filosofal";
    $meuLivro2->autor = "J. K. Rowling";
    $meuLivro2->anoPublicação = 1997;

    $meuLivro2->exibirInfo();

    ?>
</body>
</html>