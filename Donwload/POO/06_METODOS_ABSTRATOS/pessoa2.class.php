<?php
    class Pessoa{
    public $Codigo;
    public $Nome;
    public $Altura;
    public $Idade;
    public $Nascimento;
    public $Escolaridade;
    public $Salario;

    function Crescer($Centimetros){
        if ($Centimetros>0){
            $this->Altura += $Centimetros;
        }
    }

    function Formar($titulacao){
        $this->Escolaridade = $titulacao;
    }

    function Envelhecer ($anos){
            if($anos>0){
                $this->Idade +=$anos;
            }
    }

    function __construct($Codigo,$Nome,$Altura,$Idade,$Nascimento,$Escolaridade,$Salario){
        
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
        }

        function __destruct()
        {
            echo "Objeto {$this->Nome} finalizado...<br>\n";
            
        }
        
            
        


}



?>