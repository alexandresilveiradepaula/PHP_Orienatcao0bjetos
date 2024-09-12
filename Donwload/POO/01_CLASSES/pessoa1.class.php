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
    }


?>