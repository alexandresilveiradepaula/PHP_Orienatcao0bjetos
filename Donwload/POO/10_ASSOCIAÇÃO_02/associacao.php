<?php
include_once 'fornecedor.class.php';
include_once 'produto.class.php';



// Exemplo de uso:

$fornecedor = new Fornecedor(1, "Fornecedor A", "Fornecedor A LTDA");
$produto = new Produto(100, "Produto X", 50, $fornecedor);

// Exibindo dados do produto e fornecedor
echo "Produto: " . $produto->getNome() . "\n";
echo "Quantidade: " . $produto->getQuantidade() . "\n";
echo "Fornecedor: " . $produto->getFornecedor()->getNome() . "\n";
echo "Razão Social do Fornecedor: " . $produto->getFornecedor()->getRazaoSocial() . "\n";

// Modificando dados do produto e fornecedor
$produto->setNome("Produto Y");
$produto->setQuantidade(30);
$novoFornecedor = new Fornecedor(2, "Fornecedor B", "Fornecedor B LTDA");
$produto->setFornecedor($novoFornecedor);

echo "Produto Atualizado: " . $produto->getNome() . "\n";
echo "Quantidade Atualizada: " . $produto->getQuantidade() . "\n";
echo "Novo Fornecedor: " . $produto->getFornecedor()->getNome() . "\n";
echo "Nova Razão Social do Fornecedor: " . $produto->getFornecedor()->getRazaoSocial() . "\n";

?>
