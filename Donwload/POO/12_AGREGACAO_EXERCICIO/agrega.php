<?php

// Inclua as classes Livro e Estante
include_once 'livro.class.php';
include_once 'estante.class.php';

// Criando objetos da classe Livro
$livro1 = new Livro("O Senhor dos Anéis", 123456, "J.R.R. Tolkien", "HarperCollins");
$livro2 = new Livro("1984", 654321, "George Orwell", "Companhia das Letras");
$livro3 = new Livro("Dom Quixote", 789012, "Miguel de Cervantes", "Editora Planeta");

// Criando um objeto da classe Estante
$estante = new Estante("2º Andar", "BibliotecaCentral", "Campus Principal", 5);

// Adicionando os livros à estante
$estante->adicionarLivro($livro1);
$estante->adicionarLivro($livro2);
$estante->adicionarLivro($livro3);

// Exibindo informações sobre os livros na estante
foreach ($estante->getLivros() as $livro) {
    echo "Nome: " . $livro->getNome() . "<br>";
    echo "Código: " . $livro->getCodigo() . "<br>";
    echo "Autor: " . $livro->getAutor() . "<br>";
    echo "Editora: " . $livro->getEditora() . "<br><br>";
}

// Exibindo informações sobre a estante
echo "Local: " . $estante->getLocal() . "<br>";
echo "Biblioteca: " . $estante->getBiblioteca() . "<br>";
echo "Campus: " . $estante->getCampus() . "<br>";
echo "Corredor: " . $estante->getCorredor() . "<br>";

?>
