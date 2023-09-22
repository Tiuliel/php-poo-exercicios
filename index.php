<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>
    <?php
    require_once "src/Livro.php";
    $livro1 = new Livro();
    $livro1->setTitulo("O pequeno Grande Principeso");
    $livro1->setPaginas(250);
    $livro1->setAutor("Tiuliel");

    ?>

    <p>Título: <?=$livro1->getTitulo()?></p>
    <p>Páginas: <?=$livro1->getPaginas()?></p>
    <p>Autor: <?=$livro1->getAutor()?></p>


    

</body>
</html>