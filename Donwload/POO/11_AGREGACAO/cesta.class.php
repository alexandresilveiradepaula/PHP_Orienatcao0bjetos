<?php 
class Cesta {
    private $itens = [];

    // Método para adicionar um item à cesta
    public function adicionaItem(Produto $produto) {
        $this->itens[] = $produto;
    }

    // Método para calcular o total da cesta
    public function calculaTotal() {
        $total = 0;
        foreach ($this->itens as $item) {
            $total += $item->getPreco() * $item->getQuantidade();
        }
        return $total;
    }

    // Método para exibir a lista de produtos
    public function exibeLista() {
        $lista = "";
        foreach ($this->itens as $item) {
            $lista .= "Produto: " . $item->getDescricao() . 
                      " | Preço: " . $item->getPreco() . 
                      " | Quantidade: " . $item->getQuantidade() . 
                      " | Fornecedor: " . $item->getFornecedor()->getNome() . "\n";
        }
        return $lista;
    }
}
?>