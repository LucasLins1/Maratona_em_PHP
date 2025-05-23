<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de acesso</title>
</head>
<body>
    
    <h2>Classe ContaCorrente</h2>

    <?php 
    
    class ContaCorrente {
        public $numeroConta;
        private $saldo;
 
         // Construtor
    public function __construct($numeroConta, $saldoInicial) {
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldoInicial;
    }
 
    // Método get para o atributo numeroConta
    public function getNumeroConta() {
        return $this->numeroConta;
    }
 
    // Método get para o atributo saldo
    public function getSaldo() {
        return $this->saldo;
    }
 
    // Método para depositar saldo
    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }
 
    // Método para sacar saldo
    public function sacar($valor) {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }
}
 
// Criar uma instância da classe ContaCorrente
$conta = new ContaCorrente("123456", 1000.0);
echo "Numero da conta: $conta->numeroConta <br>";  // Isso gerará um erro
 
// Tentar acessar diretamente o saldo
 
//echo $conta->saldo;//  
 
// $conta->saldo = 2000.0; //
 
// Depositar um valor
$conta->depositar(500.0);
 
// Mostrar o saldo atualizado
echo " Saldo após depósito: R$" . $conta->getSaldo() . "<br>";  // Saída: 1500.0
 
// Sacar um valor
$conta->sacar(200.0);
 
// Mostrar o saldo atualizado
echo "Saldo após saque: R$" . $conta->getSaldo() . "<br>";  // Saída: 1300.0
    
    ?>

</body>
</html>