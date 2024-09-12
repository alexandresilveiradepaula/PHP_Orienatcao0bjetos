<?php
class Fornecedor {
  private $codigo;
  public $nome;
  protected $razaoSocial;

  public function __construct($codigo, $nome, $razaoSocial) {
      $this->codigo = $codigo;
      $this->nome = $nome;
      $this->razaoSocial = $razaoSocial;
  }
  public function getCodigo() {
      return $this->codigo;
  }
  public function getNome() {
      return $this->nome;
  }
  public function getRazaoSocial() {
      return $this->razaoSocial;
  }
   public function setCodigo($codigo) {
      $this->codigo = $codigo;
  }
  public function setNome($nome) {
      $this->nome = $nome;
  }
  public function setRazaoSocial($razaoSocial) {
      $this->razaoSocial = $razaoSocial;
  }
}
?>