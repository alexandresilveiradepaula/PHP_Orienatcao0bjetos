<?php

require_once 'PagamentoInterface.php'; // Use require_once para evitar inclusão duplicada

class PagamentoPayPal implements Pagamento {
    private $emailConta;

    public function __construct($emailConta) {
        $this->emailConta = $emailConta;
    }

    public function processarPagamento(float $valor) {
        echo "Processando pagamento de R$ $valor via PayPal para {$this->emailConta}...\n";
    }

    public function emitirRecibo() {
        echo "Recibo emitido para o pagamento via PayPal.\n";
    }
}

?>
