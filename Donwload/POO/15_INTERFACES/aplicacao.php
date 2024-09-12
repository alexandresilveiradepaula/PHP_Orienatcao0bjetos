<?php

require_once 'PagamentoCartaoCredito.php'; // Use require_once para evitar inclusão duplicada
require_once 'PagamentoPayPal.php';        // Use require_once para evitar inclusão duplicada

// Criando objetos para cada método de pagamento
$pagamentoCartao = new PagamentoCartaoCredito("João Silva", "1234 5678 9101 1121", "12/26", "123");
$pagamentoPayPal = new PagamentoPayPal("joao.silva@example.com");

// Array de pagamentos para demonstrar o polimorfismo
$pagamentos = [$pagamentoCartao, $pagamentoPayPal];

// Processando todos os pagamentos
foreach ($pagamentos as $pagamento) {
    $pagamento->processarPagamento(100.0); // Processa o pagamento de R$ 100.0
    $pagamento->emitirRecibo();            // Emite o recibo
}

?>
