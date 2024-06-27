<?php
class Usuario{
    //Atributos da classe
    public $nome;
    protected $cpf;
    private $endereco;
    //construtor da classe
    function Usuario(){
        $this ->preparaUsuario();
    }
    //Métodos
    private function preparaUsuario(){
        $this ->nome = "Leonardo";
        $this ->cpf = "99999999999";
        $this ->endereco = "Rua Fulano";
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function getnome(){
        return $this ->nome;
    }
    public function getEndereco(){
        return $this ->endereco;
    }
}
//Instanciando o objeto e acessando seus respectivos métodos
$usu=new Usuario();
$usu -> getCpf();
$usu -> getnome();
?>