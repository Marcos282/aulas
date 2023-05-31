<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/reset.css">
</head>

<body>
    <h1>Hello <?php echo htmlspecialchars( $nome, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>
    <p>Olá, esse é um teste de Rain TPL!</p>
    <p>Versão do PHP: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
</body>