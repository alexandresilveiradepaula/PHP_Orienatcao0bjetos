<?php

class estante {
    private  $local;
    private  $biblioteca;
    private  $campus;
    private  $corredor;
    private  $livros;

    public function __construct($local, $biblioteca, $campus, $corredor,  $livros = []) {
        $this->local = $local;
        $this->biblioteca = $biblioteca;
        $this->campus = $campus;
        $this->corredor = $corredor;
        $this->livros = $livros;
    }

    public function getLocal(){
        return $this->local;
    }

    public function setLocal(string $local) {
        $this->local = $local;
    }

    public function getBiblioteca(){
        return $this->biblioteca;
    }

    public function setBiblioteca(string $biblioteca) {
        $this->biblioteca = $biblioteca;
    }

    public function getCampus(){
        return $this->campus;
    }

    public function setCampus(string $campus) {
        $this->campus = $campus;
    }

    public function getCorredor() {
        return $this->corredor;
    }

    public function setCorredor(int $corredor) {
        $this->corredor = $corredor;
    }

    public function getLivros() {
        return $this->livros;
    }

    public function setLivros(array $livros) {
        $this->livros = $livros;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function __destruct() {
        // código opcional para limpeza de recursos
    }
}

?>