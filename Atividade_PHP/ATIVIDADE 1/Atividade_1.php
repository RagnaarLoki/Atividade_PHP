//parte responsável para criar a classe base veículo

<?php
class Veiculo {
    protected $marca;
    protected $modelo;
    protected $ano;

    public function __construct($marca, $modelo, $ano) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function exibirDetalhes() {
        return "Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano";
    }

    public function acelerar() {
        return "O veículo está acelerando.";
    }
}
?>

//Parte responsável para criar a classes de "Carro" e "Moto"

<?php
class Carro extends Veiculo {
    private $numeroDePortas;

    public function __construct($marca, $modelo, $ano, $numeroDePortas) {
        parent::__construct($marca, $modelo, $ano);
        $this->numeroDePortas = $numeroDePortas;
    }

    public function exibirDetalhes() {
        return parent::exibirDetalhes() . ", Número de Portas: $this->numeroDePortas";
    }

    public function acelerar() {
        return "O carro está acelerando.";
    }
}

class Moto extends Veiculo {
    private $tipoDeGuidom;

    public function __construct($marca, $modelo, $ano, $tipoDeGuidom) {
        parent::__construct($marca, $modelo, $ano);
        $this->tipoDeGuidom = $tipoDeGuidom;
    }

    public function exibirDetalhes() {
        return parent::exibirDetalhes() . ", Tipo de Guidom: $this->tipoDeGuidom";
    }

    public function acelerar() {
        return "A moto está acelerando.";
    }
}
?>

//Instanciando os Objetos

<?php
// Incluindo os arquivos das classes
include 'Veiculo.php';
include 'Carro.php';
include 'Moto.php';

// Instanciando um objeto da classe Carro
$carro = new Carro("Toyota", "Corolla", 2020, 4);
echo $carro->exibirDetalhes() . PHP_EOL;
echo $carro->acelerar() . PHP_EOL;

// Instanciando um objeto da classe Moto
$moto = new Moto("Honda", "CB500", 2019, "Esportivo");
echo $moto->exibirDetalhes() . PHP_EOL;
echo $moto->acelerar() . PHP_EOL;
?>

