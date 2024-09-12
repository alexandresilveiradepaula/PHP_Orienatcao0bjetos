<?php

class funcionario{
  private $codigo;
  public $nome;
  public $setor;
  public $dataAdmissao;
  public $regime;
  public $salario;
  public $dependente;


  public function __construct($codigo,$nome,$setor,$dataAdmissao,$regime,$salario,$dependente,$codigoDependente,$nomeDependente,$parentescoDependente)
  {
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->setor = $setor;
    $this->dataAdmissao = $dataAdmissao;
    $this->regime = $regime;
    $this->salario = $salario;
   $this->dependente = new dependente($codigoDependente,$nomeDependente,$parentescoDependente);
      
  }

  public function getCodigo()
  {
    return $this->codigo;
  }


  public function setCodigo($codigo)
  {
    $this->codigo = $codigo;

    return $this;
  }

  
}

?>