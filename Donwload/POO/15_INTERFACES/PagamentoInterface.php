<?php

interface Pagamento {
    public function processarPagamento(float $valor);
    public function emitirRecibo();
}

?>
