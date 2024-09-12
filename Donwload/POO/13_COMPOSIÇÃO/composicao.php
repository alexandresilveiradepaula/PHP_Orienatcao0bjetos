<?php

include_once 'fornecedor.class.php';
include_once 'contato.class.php';


// Exemplo de uso:
$fornecedor = new Fornecedor(1, "Empresa X", "Rua Y, 123", "Cidade Z", "João Silva", "555-1234", "joao@email.com");

$fornecedor->setContato('Lucas','51 996321510','lucas@gmail.com');

echo $fornecedor->exibirFornecedor();
?>
