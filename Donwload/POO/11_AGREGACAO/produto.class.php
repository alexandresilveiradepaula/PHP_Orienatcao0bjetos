
<?php 
class Produto {
    private $codigo;
    public $descricao;
    public $preco;
    public $quantidade;
    public $fornecedor;

    public function __construct($codigo, $descricao, $preco, $quantidade, Fornecedor $fornecedor) {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        $this->fornecedor = $fornecedor;
    }

    // Getters e Setters
    public function getCodigo() {
        return $this->codigo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getFornecedor() {
        return $this->fornecedor;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function setFornecedor(Fornecedor $fornecedor) {
        $this->fornecedor = $fornecedor;
    }
}
?>