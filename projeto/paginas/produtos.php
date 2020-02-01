<?php

require_once('./acoes/produtos.php');

$nome = $_GET['nome'] ?? '';
$produtos = buscaTodosProdutos($conexao, $nome);
if (!$produtos) {
    $erro = "Falha ao buscar produtos cadastrados";
}

?>

<div class="container-fluid align-self-stretch">
    <br>
    <div class="card col-12">
        <div class="card-header  bg-dark row">
        <div class="col-4"></div>
        <div class="col-4">
            <h3 class="text-white">Tabela de produtos</h3>
        </div>

        <div class="col-4 text-right">
        <a class="btn btn-primary alight-right" href="?pagina=cadastrar_produto"><i class="fas fa-cart-plus mr-2"></i>Criar novo</a>
        </div>
        </div>

        <div class="card-body">

            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  while($produto = mysqli_fetch_assoc($produtos)): ?>
                        <tr>
                            <th scope="row"><?= $produto['id'] ?></th>
                            <td><?= $produto['nome'] ?></td>
                            <td><?= $produto['descricao'] ?></td>
                            <td>R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></td>
                            <td>
                                <a class="btn btn-danger mr-3 " href="?pagina=deletar_produto&id=<?= $produto['id']; ?>"><i class="fas fa-trash-alt"></i></a>
                                <a class="btn btn-primary mr-3" href="?pagina=editar_produto&id=<?= $produto['id']; ?>"><i class="far fa-edit"></i></a>
                                <a class="btn btn-success" href="?pagina=comprar_produto&id=<?= $produto['id']; ?>"><i class="fas fa-money-bill-wave"></i></a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <?php if (isset($erro)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $erro; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>


