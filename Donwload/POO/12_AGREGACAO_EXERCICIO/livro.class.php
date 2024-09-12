<?php

class livro {
    private $nome;
    private $codigo;
    private $autor;
    private $editora;

    public function __construct( $nome,  $codigo,$autor, $editora) {
        $this->nome = $nome;
        $this->codigo = $codigo;
        $this->autor = $autor;
        $this->editora = $editora;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function setEditora($editora){
        $this->editora = $editora;
    }

    public function __destruct() {
        // código opcional para limpeza de recursos
    }
}

?>