<?php

    class Estagiario extends Funcionario
    {
        /* Método GetSalario sobrescrito
        * retorna 0 $Salario com 12% de bonus
        */

        function GetSalario()
        {
            return $this->Salario * 1.12;
        }
    }


?>
