<?php

abstract class pessoa{

  public $nome;
  public $cpf;
  public $endereco;
  public $telefone;

  public function __construct($nome,$cpf,$endereco,$telefone){

    $this->nome = $nome;
    $this->cpf = $cpf;
    $this->endereco = $endereco;
    $this->telefone = $telefone;
  }
  public function __destruct()
  {
    echo "Ja era....";
  }

  public function alterarTelefone($telefone){
    $this->telefone = $telefone;
  }

  public function alterarEndereco($endereco){
    $this->endereco = $endereco;
  }
    

}
?>