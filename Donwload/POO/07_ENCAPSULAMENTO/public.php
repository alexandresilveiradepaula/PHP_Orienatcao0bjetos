<?php
include_once 'funcionario2.class.php';
include_once 'Estagiario.class.php';

$pedrinho  = new Funcionario;
$pedrinho->Nome = 'Pedrinho';

$mariana = new Estagiario;
$mariana->Nome = 'Mariana';

echo $pedrinho->Nome;
echo "<br>\n";
echo $mariana->Nome;

?>