<?php
include_once 'funcionario2.class.php';

$pedro = new Funcionario;

$pedro->SetSalario(876);

echo 'Salario:(R$)'.$pedro->GetSalario();




?>
