<?php
require_once'Pessoa.php';
class Funcionario extends Pessoa {
    //Propriedade específica da classe Funcionario
    private $salario;
    //Construtor da classe Funcionario 
    public function __construct($nome, $idade, $salario) {
        parent::__construct($nome, $idade);
        $this -> salario = $salario;
    }
    //Método para exibir Informação do Funcionario
    public function exibirInformacoes(){
        //Chama o método exibirInformacoes da classe pai
        parent::exibirInformacoes();
        echo "Salário: ". $this -> salario ."<br>";
    }
}
?>

//exemplo 3

<?php
require_once 'Funcionario.php';
// Cria uma instância da classe Funcionario
$funcionario = new Funcionario("Diego", 30, 5000);
// Exibe as informações do funcionario
$funcionario->exibirInformacoes();
?>

