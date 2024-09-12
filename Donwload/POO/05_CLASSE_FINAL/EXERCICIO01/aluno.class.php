<?php

include_once 'pessoa.class.php';

final class aluno extends pessoa{
  public $turma;
  public $disciplina;
  public $curso;
  public $titulacao;

  public function __construct($nome,$cpf,$endereco,$telefone,$turma,$disciplina,$curso,$titulacao){
      parent::__construct($nome,$cpf,$endereco,$telefone);
        $this->turma = $turma;
        $this->disciplina = $disciplina;
        $this->curso = $curso;
        $this->titulacao = $titulacao; 

  }

  public function __destruct()
  {
    echo "Falceu.....";
  }

  
  public function formar($titulacao){
    $this->titulacao=$titulacao;
  }
  }









?>