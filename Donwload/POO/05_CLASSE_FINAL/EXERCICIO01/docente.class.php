<?php

include_once 'pessoa.class.php';

final class docente extends pessoa{

  public  $formacao;
  public  $curso;
  public $salario;

public function __construct($nome,$cpf,$endereco,$telefone,$formacao,$curso,$salario){


  parent::__construct($nome,$cpf,$endereco,$telefone);
  $this->formacao = $formacao;
  $this->salario = $salario;
  $this->curso = $curso;
  
 
}

public function __destruct()
{
  echo "foi de base";
} 
public function formar($formacao,$salario){
  $this->formacao = $formacao;
  $this->salario = $salario;

function aumentaSalario($salario){
  $this->salario = $salario * 10;
}
}



?>