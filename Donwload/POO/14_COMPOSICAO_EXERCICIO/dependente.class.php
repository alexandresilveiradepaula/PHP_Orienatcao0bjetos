<?php
  class dependente {
    private $codigo;
    private $nome;
    private $parentesco;


  public function __construct($codigo,$nome,$parentesco){
    $this->codigo = $codigo;
    $this->nome = $nome;
    $this->parentesco = $parentesco;
      }

  public function __destruct()
  {
    
  }

  public function getCodigo(){
    return $this->codigo;
  }

  public function setCodigo($codigo){
    $this->codigo = $codigo;
  }

  public function getNome(){
    return $this->nome;
  }

  public function setNome($nome){
    $this->nome = $nome;
  }

  public function getParentesco(){
    return $this->parentesco;
  }

  public function setParentesco($parentesco){
    $this->parentesco = $parentesco;
  }

  public function exibeDependente(){
    return "Codigo: ".$this->codigo. "Nome: ". $this->nome."Parentesco: ".$this->parentesco. "<br>\n";
  }
}

    ?>