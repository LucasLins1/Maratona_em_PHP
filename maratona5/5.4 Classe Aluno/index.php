<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor e descructor</title>
</head>
<body>
    
    <h2>Classe Aluno</h2>

    <?php 
    
    class Aluno{
    public $nome;
    private $matricula;
    public $curso;

    public function __construct($nome, $matricula, $curso){
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function __destruct() {
        echo "Aluno $this->nome removido.";

    }
    
    }

    $aluno = new Aluno("Calleri", 102938, "futebol" );

    ?>

</body>
</html>