<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <?php

use Biblioteca\Didatico;
use Biblioteca\Tecnico;
use Biblioteca\Programacao;
use Biblioteca\Web;

//use Biblioteca\{Didatico, Tecnico, Programacao};

require_once "vendor/autoload.php";

$livroTecnico = new Tecnico;
$livroTecnico->setTitulo("ADS");
$livroTecnico->setAutor("fulano");
$livroTecnico->setPaginas(250);
$livroTecnico->setFormato(["Digital"]);

$livroTecnico2 = new Programacao;
$livroTecnico2->setTitulo("Programação e Algoritmos");
$livroTecnico2->setAutor("Beltrano");
$livroTecnico2->setPaginas(450);
$livroTecnico2->setFormato(["Fisico"]);

$livroTecnico3 = new Didatico;
$livroTecnico3->setTitulo("O pequeno grande principeso");
$livroTecnico3->setAutor("Ciclano");
$livroTecnico3->setPaginas(2250);
$livroTecnico3->setFormato(["Digital"]);

?>

<h2>Dados (Técnico)</h2>
<p>Nome: <?=$livroTecnico->getTitulo()?></p>
<p>Autor: <?=$livroTecnico->getAutor()?></p>
<p>Formato: <?=$livroTecnico->getFormato()?></p>

<p>Nome: <?=$livroTecnico2->getTitulo()?></p>
<p>Autor: <?=$livroTecnico2->getAutor()?></p>
<p>Formato: <?=$livroTecnico2->getFormato()?></p>

<p>Nome: <?=$livroTecnico3->getTitulo()?></p>
<p>Autor: <?=$livroTecnico3->getAutor()?></p>
<p>Formato: <?=$livroTecnico3->getFormato()?></p>

<?php
$LivroWeb = new Web;
var_dump($LivroWeb);
?>


</body>
</html>