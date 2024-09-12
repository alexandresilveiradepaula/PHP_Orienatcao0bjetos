<?php
abstract class Conta{

  public $Agencia;
  public $Codigo;
  public $DataDeCriacao;
  public $Titular;
  public $Senha;
  public $Saldo;
  public $Cancelada;


  function Retirar($quantia){
      if ($quantia>0){
          $this->Saldo -= $quantia;
      }
  }

  function Depositar($quantia){
      if($quantia>0){
          $this->Saldo += $quantia;

      }
  }

  function ObterSaldo(){
      return $this->Saldo;
  }

  function __construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo){

      $this->Agencia = $Agencia;
      $this->Codigo = $Codigo;
      $this->DataDeCriacao = $DataDeCriacao;
      $this->Titular = $Titular;
      $this->Senha = $Senha;
      
      $this->Depositar($Saldo);
      $this->Cancelada = false;
      }
  
      function __destruct()
      {
          echo " Objeto Conta {$this->Codigo} de {$this->Titular->Nome} foi finalizada...<br>\n";
      }

      abstract function Transferir ($Conta,$Valor);
  }



?>