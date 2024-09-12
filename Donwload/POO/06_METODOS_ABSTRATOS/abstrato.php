<?php
  include_once 'pessoa2.class.php';
  include_once 'Conta4.class.php';
  include_once 'ContaPoupanca.class.php';

  $Carlos = new Pessoa(10,"Carlos da Silva",1.85,25,72,"Ensino Medio",650.00);

  $conta = new ContaPoupanca(6677,"CC.1234.56","10/07/02", $Carlos,9876,500.00,"10/07");




?>