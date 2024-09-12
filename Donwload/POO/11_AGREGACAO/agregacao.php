<?php

include_once 'fornecedor.class.php';
include_once 'cesta.class.php';
include_once 'produto.class.php';

$fornecedor = new Fornecedor(1, "Fornecedor A", "Fornecedor A LTDA");

$produto1 = new Produto(1, "Ameixa", 1.40, 10, $fornecedor);
$produto2 = new Produto(2, "Morango", 2.24, 5, $fornecedor);
$produto3 = new Produto(3, "Abacaxi", 2.86, 8, $fornecedor);
$produto4 = new Produto(4, "Laranja", 1.14, 12, $fornecedor);

$cesta = new Cesta;
$cesta->adicionaItem($produto1);
$cesta->adicionaItem($produto2);
$cesta->adicionaItem($produto3);
$cesta->adicionaItem($produto4);

echo "Total da Cesta: R$ " . $cesta->calculaTotal() . "\n";
echo "<br>";
echo nl2br($cesta->exibeLista());


?>