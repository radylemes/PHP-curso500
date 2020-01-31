<?php
  require_once('./acoes/registro.php');

  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if (empty($username) || empty($nome) || empty($senha)) {
      $resultado = "Todos campos são obrigatórios";
    } else {
      $resultado = cadastrarUsuario($username, $nome, $senha, $conexao);
    }
  }

?>
<div class="container">
<?php if (isset($erro)): ?>
        <div class="alert alert-danger" role="alert">
            <?= $erro; ?>
        </div>
<?php endif ?>
<form method="post" class="form-signin">
<img class="mb-4" src="./img/logo.png" alt="" width="200" height="72">
  <div class="form-group">
    <label for="username"></label>
    <input type="text" class="form-control" placeholder="Usuario" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="nome"></label>
    <input type="text" class="form-control" placeholder="Nome Completo" id="nome" name="nome">
  </div>
  <div class="form-group">
    <label for="senha"></label>
    <input type="password" class="form-control" placeholder="Senha" id="senha" name="senha">
  </div>
  <button type="submit" class="btn btn-success">Registrar</button>
</form>
</div>

