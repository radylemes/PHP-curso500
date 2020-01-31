<?php

require_once('./acoes/login.php');

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $username = $_POST['username'];
        $senha = $_POST['senha'];
        $resultado = validaLogin($username, $senha,$conexao);

    }
?>


<form method="post" class="form-signin">
    <img class="mb-4" src="./img/logo.png" alt="" width="200" height="72">
    <label for="username" class="sr-only">Usuario</label>
    <input id="username" name="username" class="form-control" placeholder="Email"  autofocus="" type="text">
    <label for="senha" class="sr-only">Senha</label>
    <input id="senha" name="senha" class="form-control" placeholder="Senha"  type="password">
    <button class="btn btn-lg btn-success btn-block" type="submit">Entrar</button>
    <a class="btn btn-lg btn-primary btn-block" href="?pagina=registro" type="submit">Registrar-se</a>
    
        <?php if (isset($_GET['mensagem'])): ?>
            <div class="alert alert-success" role="alert">
                usuario cadastrado com sucesso!
            </div>
        <?php endif ?>
        <?php if(isset($resultado)): ?>
            <div class="alert alert-danger" role="alert">
                <?= $resultado; ?>
            </div>
        <?php endif; ?>

    <p class="mt-5 mb-3 text-muted">© Tabajara 2020</p>
</form>

<!-- 

<div class="container">
<form method="post">
  <div class="form-group">
    <label for="username">Usuário</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="senha">Senha</label>
    <input type="password" class="form-control" id="senha" name="senha">
  </div>
  <button type="submit" class="btn btn-success">Entrar</button>
</form>

<br>
<a class="btn btn-large btn-primary" href="?pagina=registro">Registrar-se</a>
</div> -->