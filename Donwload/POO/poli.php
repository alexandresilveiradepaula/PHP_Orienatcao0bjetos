<?php

    #carregas as classes

    include_once 'CONSTRUCT_DESTRUCT/pessoa2.class.php';
    include_once 'CONSTRUCT_DESTRUCT/conta2.class.php';
    include_once 'HERANÇA/ContaPoupanca.class.php';
    include_once 'HERANÇA/ContaCorrente.class.php';

    #Criação de um objeto $Carlos

    $Carlos = new Pessoa(10,"Carlos da Silva",1.85,48,"10/04/1976","Ensino Medio",650.00);

    //echo "Manipulando o Objeto {$carlos->Nome}: <br>\n";

    # Criação do Objeto $contas_carlos

    $contas[1] = new ContaCorrente(6677, "CC.1234.56","10/07/2002",$Carlos,9876,500.00,200.00);
    $contas[2] = new ContaPoupanca(6678,"PP.1234.57","10/07/2002",$Carlos,9876,500.00,'10/07');

    //percorrer as contas

    foreach($contas as $key => $conta)
        { 
            echo "Manipulando a conta $key de:{$conta->Titular->Nome}:<br>\n";
            echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo()} <br>\n";
            $conta->Depositar(200);
            echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo()} <br>\n";
            $conta->Retirar(100);
            echo "O saldo atual da conta $key é R\$ {$conta->ObterSaldo()} <br>\n";

        }
      
?>