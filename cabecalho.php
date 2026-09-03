<?php
$baseUrl = '/projeto_php';
?>
<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto PHP - CRUD</title>
    <link rel="stylesheet" href="<?= $baseUrl ?>/css/style.css">
</head>
<body>
    <header>
        <h1>Sistema de Produtos</h1>
            <nav>
                <a href="<?= $baseUrl ?>/index.php">Início</a>
                <a href="<?= $baseUrl ?>/produtos/listar.php">Produtos</a>
                <a href="<?= $baseUrl ?>/login.php">Login</a>
                <a href="<?= $baseUrl ?>/logout.php">Sair</a>
            </nav>
    </header>
