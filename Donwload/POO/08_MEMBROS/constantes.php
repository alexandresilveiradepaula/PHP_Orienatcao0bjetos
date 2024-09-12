<?php

class Biblioteca
{
    const Nome = "GTK";
}

class aplicacao extends Biblioteca{

    const Ambiente = "GNOME Desktop";
    const versao = "3.8";

    // método construtor
    function __construct($Nome){
        echo parent::Nome.self::Ambiente.self::versao.$Nome."<br>\n";
    
    }
}

echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::versao . "<br>.\n";

new aplicacao('Dia');
new Aplicacao ('Gimp');




?>