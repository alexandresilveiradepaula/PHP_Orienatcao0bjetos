<?php
class ContaCorrente extends Conta{
    public $Limite;

    function __construct($Agencia, $Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo,$Limite){

        parent::__construct($Agencia,$Codigo,$DataDeCriacao,$Titular,$Senha,$Saldo);
        $this->Limite = $Limite;
        }
        
    function Retirar($quantia){

        $cpmf=0.05;

        if(($this->Saldo + $this->Limite)>= $quantia){
            parent::Retirar($quantia);

            parent::Retirar($quantia * $cpmf);
        }

        else{
            echo "Money que é good nós naum reve, se nós revasse nos não tava aqui playando";
            return false;
        }

        return true;
    }

    }
?>