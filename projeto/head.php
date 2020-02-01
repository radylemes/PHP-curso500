<?php

require_once('./acoes/produtos.php');

$nome = $_GET['nome'] ?? '';
$produtos = buscaTodosProdutos($conexao, $nome);
if (!$produtos) {
    $erro = "Falha ao buscar produtos cadastrados";
}

?>


<!doctype html>
<html lang="pt_br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
        <link href="./lib/signin.css" rel="stylesheet">
        <link href="./lib/fontawesome/css/all.css" rel="stylesheet">

        <title>Projeto - Curso 500</title>
    </head>
    <body class="text-center" >
        <?php if(isset($_SESSION['logado']) && $_SESSION['logado'] === true): ?>
<!--             <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Projeto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pagina=dados_pessoais">Dados pessoais</a>
            </li>
            </ul> -->

            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <img class="mr-4" src="./img/logo.png" alt="" width="120" height="30">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="?pagina=home"><i class="fas fa-home mr-2"></i>Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pagina=dados_pessoais"><i class="fas fa-user-edit mr-1"></i>Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pagina=produtos"><i class="fas fa-store mr-1"></i>Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?pagina=produto_usuario">Relação</a>
                    </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    <input type="hidden" name="pagina" value="produtos">
                    <input class="form-control mr-sm-2" type="search" id="nome" name="nome" placeholder="Busca produtos" aria-label="Search">
                    <!-- <input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Nome do produto..." required> -->
                    <button class="btn btn-info my-2 my-sm-0" ><i class="fas fa-search"></i></button>
                    </form>

                    <li class="nav-item">
                        <a class="nav-link btn btn-danger ml-4" href="?pagina=sair"><i class="fas fa-power-off"></i></a>
                    </li>
                </div>
            </nav>
        <?php endif; ?>