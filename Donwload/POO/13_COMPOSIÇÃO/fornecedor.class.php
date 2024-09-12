<?php


class Fornecedor {
    private $codigo;
    private $razaoSocial;
    private $endereco;
    private $cidade;
    private $contato;

    public function __construct($codigo, $razaoSocial, $endereco, $cidade, $nomeContato, $telefoneContato, $emailContato) {
        $this->codigo = $codigo;
        $this->razaoSocial = $razaoSocial;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        // Composição: Fornecedor é responsável por criar a instância de Contato
        $this->contato = new Contato($nomeContato, $telefoneContato, $emailContato);
    }

    // Getters
    public function getCodigo() {
        return $this->codigo;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getContato() {
        return $this->contato;
    }

    // Setters
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setContato($nomeContato, $telefoneContato, $emailContato) {
        $this->contato->setNome($nomeContato);
        $this->contato->setTelefone($telefoneContato);
        $this->contato->setEmail($emailContato);
    }

    // Método para exibir os detalhes do fornecedor
    public function exibirFornecedor() {
        return "Código: " . $this->codigo . 
               ", Razão Social: " . $this->razaoSocial . 
               ", Endereço: " . $this->endereco . 
               ", Cidade: " . $this->cidade . 
               ", Contato: [" . $this->contato->exibirContato() . "]";
    }
}

?>

