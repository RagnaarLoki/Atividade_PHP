<?php
class Pessoa{
    //Propriedade da classe Pessoa
    protected $nome;
    protected $idade;
    //Construtor da classe Pessoa
    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }
    //Método para exibir informações da Pessoa
    public function exibirInformacoes(){
        echo "Nome: ". $this->nome ."<br>";
        echo"Idade: ". $this->idade ."<br>";
    }
}
?>