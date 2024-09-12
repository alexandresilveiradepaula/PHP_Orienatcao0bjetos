<?php

require_once 'PagamentoInterface.php'; // Use require_once para evitar inclusão duplicada

class PagamentoCartaoCredito implements Pagamento {
    private $nomeTitular;
    private $numeroCartao;
    private $dataValidade;
    private $codigoSeguranca;

    public function __construct($nomeTitular, $numeroCartao, $dataValidade, $codigoSeguranca) {
        $this->nomeTitular = $nomeTitular;
        $this->numeroCartao = $numeroCartao;
        $this->dataValidade = $dataValidade;
        $this->codigoSeguranca = $codigoSeguranca;
    }

    public function processarPagamento(float $valor) {
        echo "Processando pagamento de R$ $valor via Cartão de Crédito para {$this->nomeTitular}...\n";
    }

    public function emitirRecibo() {
        echo "Recibo emitido para o pagamento via Cartão de Crédito.\n";
    }
}

?>
