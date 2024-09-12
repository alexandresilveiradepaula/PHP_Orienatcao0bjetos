<?php

include_once 'Funcionario2.class.php';
include_once 'Estagiario.class.php';

$pedrinho = new Estagiario;
$pedrinho->SetSalario(248);

echo 'O Salario do Pedrinho é R$:'.$pedrinho->GetSalario()."\n";


?>