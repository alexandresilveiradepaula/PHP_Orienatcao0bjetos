<?php

class Funcionario{
    public $Nome;
    private $Codigo;
    private $Nascimento;
    protected $Salario;

    function SetSalario($Salario){
        if(is_numeric($Salario) and ($Salario>0)){
            $this->Salario = $Salario;
        }
    }

    function GetSalario(){
        return $this->Salario;
    }
}



?>