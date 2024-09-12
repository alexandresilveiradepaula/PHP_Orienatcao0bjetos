<?php

class Contato {
    private $nome;
    private $telefone;
    private $email;

    public function __construct($nome, $telefone, $email) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    public function __destruct()
    {
        echo "Ja era....";
    }

    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    // Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // Método para exibir os detalhes do contato
    public function exibirContato() {
        return "Nome: " . $this->nome . ", Telefone: " . $this->telefone . ", Email: " . $this->email;
    }
}

?>
