<?php
    include_once('helpers/url.php');
    include_once('data/posts.php');
    include_once('data/categories.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Projeto - Diego Costa</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css" />
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet" />
</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Logo formato inseto representando a palavra bug que é utilizado no mundo da programação.">
        </a>
        <nav id="navbar">
            <ul>
                <li><a href="<?= $BASE_URL ?>">Home</a></li>
                <li><a href="<?= $BASE_URL ?>about.php">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>categories.php">Categorias</a></li>
                <li><a href="<?= $BASE_URL ?>contact.php">Contato</a></li>
            </ul>
        </nav>
    </header>