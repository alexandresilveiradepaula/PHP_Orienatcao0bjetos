<?php
//incluindo os arquivos das classes
include_once 'fornecedor.class.php';
include_once 'produto.class.php';

//instancia Fornecedor

$fornecedor = new Fornecedor;
$fornecedor->Codigo = 848;
$fornecedor->RazaoSocial = 'Bom Gosto Alimentos LTDA';
$fornecedor->Endereco = 'Rua Ipiranga';
$fornecedor->Cidade = 'Poços de Caldas';

//instancia Produto

$produto = new Produto;
$produto->Codigo = 462;
$produto->Descricao = 'Doce de Pessego';
$produto->Preco = 1.24;
$produto->Fornecedor = $fornecedor;

//imprime atributos

echo 'Codigo:'.$produto->Codigo."<br>\n";
echo 'Descricao:'.$produto->Descricao."<br>\n";
echo 'Codigo:'.$produto->Fornecedor->Codigo."<br>\n";
echo 'Razao Social:'.$produto->Fornecedor->RazaoSocial."<br>\n";
?>
