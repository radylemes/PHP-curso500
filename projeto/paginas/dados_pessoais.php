<?php 
    require_once ('./acoes/dados_pessoais.php');

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email'];

        if (empty($id) || empty($username) || empty($nome) || empty($email)) {
            $resultado = false;
        } else {
            $resultado = atualizaDados($id, $username, $nome, $senha, $email, $conexao);
        }
    }

    $usuario = buscaUsuarioLogado($conexao);
?>


<div class="align-self-start">
<br>
<div class="card" style="width: 50rem;">
  <div class="card-header bg-dark">
    <h3 class="text-white">Perfil do Usuario</h3>
  </div>
  <div class="card-body">
    <form method="post">
        <div  class="form-group row">
            <input type="hidden" class="form-control " id="id" name="id" value="<?php if(isset($usuario)) { echo $usuario['id']; } ?>">
            <label for="username" class="col-2 col-form-label">Usuário</label>
            <div class="col-4">
                <input type="text" class="form-control " id="username" name="username" value="<?php if(isset($usuario)) { echo $usuario['username']; } ?>">
            </div>
            <label for="nome" class="col-2 col-form-label">Nome</label>
            <div class="col-4">
                <input type="text" class="form-control " id="nome" name="nome" value="<?php if(isset($usuario)) { echo $usuario['nome']; } ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="senha"class="col-2 col-form-label" >Senha</label>
            <div class=" col-4">
                <input type="password" class="form-control " id="senha" name="senha">
            </div>
            <label for="email" class="col-2 col-form-label">E-mail</label>
            <div class="col-4">
                <input type="email" class="form-control" id="email" name="email" value="<?php if(isset($usuario)) { echo $usuario['email']; } ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="row text-center">
                <div class="col-4"></div>
                <div class="col-4 text-center">
            <label for="ultimo_login" class="col-form-label">Ultimo Login</label>
            </div>
            <div class="col-4"></div>
            </div>

            <div class="row">
            <div class="col-4"></div>
                <div class="col-4 text-center">
                <input type="text" class="form-control text-center" id="ultimo_login" name="ultimo_login" value="<?php if(isset($usuario)) { echo date_format(date_create($usuario['ultimo_login']), 'd/m/Y H:i:s'); } ?>">
                </div>
            <div class="col-4"></div>
            </div>
        </div>
        <br>
        




            <button type="submit" class="btn btn-success">Atualizar</button>

    </form>
  </div>

  <?php if(isset($resultado) && !$resultado): ?>
        <div class="alert alert-danger" role="alert">
            Falha ao atualizar dados!
        </div>
    <?php elseif(isset($resultado) && $resultado): ?>
        <div class="alert alert-success" role="alert">
            Dados atualizados!
        </div>
    <?php endif; ?>






</div>
</div>
</div>