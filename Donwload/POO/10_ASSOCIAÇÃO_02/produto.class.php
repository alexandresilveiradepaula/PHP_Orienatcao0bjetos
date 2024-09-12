<?php


class Produto {
  private $codigo;
  public $nome;
  protected $quantidade;
  public $fornecedor;

  public function __construct($codigo, $nome, $quantidade, Fornecedor $fornecedor) {
      $this->codigo = $codigo;
      $this->nome = $nome;
      $this->quantidade = $quantidade;
      $this->fornecedor = $fornecedor;
  }

  // Getters
  public function getCodigo() {
      return $this->codigo;
  }

  public function getNome() {
      return $this->nome;
  }

  public function getQuantidade() {
      return $this->quantidade;
  }

  public function getFornecedor() {
      return $this->fornecedor;
  }

  // Setters
  public function setCodigo($codigo) {
      $this->codigo = $codigo;
  }

  public function setNome($nome) {
      $this->nome = $nome;
  }

  public function setQuantidade($quantidade) {
      $this->quantidade = $quantidade;
  }

  public function setFornecedor(Fornecedor $fornecedor) {
      $this->fornecedor = $fornecedor;
  }
}
?>