
<?php 

require_once './db-mysql.php';

//require_once './db-post.php';

$sql = "SELECT * FROM usuario";

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Aula PHP</title>
    </head>
    <body sytle="width=100%">

        <div class="container-fluid">

            <ul class="nav nav-tabs-dark bg-dark" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Select Mysql</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="Postgress-tab" data-toggle="tab" href="#Postgress" role="tab" aria-controls="contact" aria-selected="false">Postgress</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Delta</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="tabuada-tab" data-toggle="tab" href="#tabuada" role="tab" aria-controls="contact" aria-selected="false">Tabuada</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                </li>
            </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <div class="card">
                            <div class="card-header">
                                Exemplo Mysql
                            </div>
                            
                            <div class="card-body">
                        <?php

/*                          $nome = "Daniel Lemes";
                            $email = 'daniel.lemes@interport.com.br';
                            $senha = '4linux';

                            $inserir = "INSERT INTO usuario(nome, email, senha)".
                                        "values('$nome','$email','$senha')";

                            if (mysqli_query($conexao, $inserir)){
                                print("linhas alteradas: ").mysqli_affected_rows($conexao);
                            }else{
                                print("Erro: ".mysqli_error($conexao));
                            }

                            echo "<br><hr>";
                            
 */                         
                            echo "Resultado da pesquisa Mysql: <br> <hr>";
                            $email = '%daniel%';
                            $select = 'SELECT * FROM usuario WHERE email like ?';
                            $smtm = mysqli_stmt_init($conexao);
                            if (mysqli_stmt_prepare($smtm, $select)){
                                mysqli_stmt_bind_param($smtm, "s", $email);

                                mysqli_stmt_execute($smtm);

                                if($resultado = mysqli_stmt_get_result($smtm)){
                                    while($linha = mysqli_fetch_assoc($resultado)){
                                        foreach ($linha as $campo => $valor) {
                                            echo " $campo : $valor <br>";
                                        }
                                        echo '<hr>';
                                    }
                                }
                            }
                            echo "Conteudo do banco Mysql: <br> <hr>";
                            if($result = mysqli_query($conexao, $sql)){

                                while ($linha = mysqli_fetch_assoc($result)){
                                    foreach ($linha as $coluna => $valor) {
                                        echo "$coluna : $valor <br>";        
                                    }   
                                    echo '<hr>';
                                }
                            }
                        ?>

                    </div>
                </div>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <br>
                        <div class="card">
                        <div class="card-header">
                                Exemplo Funçoes
                            </div>
                            
                            <div class="card-body">
                  <?php

                        include "funcoes.php";

                        // echo "O peso ideal para uma Mulher é com a altuara de 1,8 m = ". peso_ideal(1.8, "F") . "<br>";
                        // echo "O peso ideal para um Homem é com a altuara de 1,8 m = ". peso_ideal(1.8, "M") . "<br>";


                        $resultado = delta(20, 20, 2);

                        echo "Delta é $resultado[0] <br>";
                        echo "X1 é $resultado[1] <br>";
                        echo "X2 é $resultado[2] <br>";

                    ?>    
                      </div>
                </div>

                </div>
                <div class="tab-pane fade" id="Postgress" role="tabpanel" aria-labelledby="Postgress-tab">
                    <br>
                    <div class="card">
                        <div class="card-header">
                            Exemplo Postgres
                        </div>
                        <div class="card-body">

                            <?php
                                require_once './db-post.php';
/* 
                                $nome = "Daniel Lemes";
                                $email = 'daniel.lemes@interport.com.br';
                                $senha = '4linux';

                                $inserir = "INSERT INTO usuario(nome, email, senha)".
                                            "values('$nome','$email','$senha')";

                                if ($resultado=pg_query($conexao_pg, $inserir)){
                                    print("linhas alteradas: ").pg_affected_rows($resultado);
                                }else{
                                    print("Erro: ".pg_result_error($resultado));
                                }

                                echo"<br><hr>"; */

/*                                 $id = '3';
                                $email = '4linux@interport.com.br';
                                $update = "UPDATE usuario SET email = $1 WHERE id = $2";

                                if(pg_prepare($conexao_pg, 'att_user', $update)){
                                    if ($resultado=pg_execute($conexao_pg, 'att_user', [$email,$id])){
                                       
                                        $linhas = pg_affected_rows($resultado);

                                        if($linhas > 0){
                                            print("Erro: ".pg_result_error($resultado));
                                        }
                                    }
                                    pg_free_result($resultado);
                                }else{
                                    print("Erro: ".pg_result_error($resultado));
                                }
                                echo"<br><hr>"; */

                                echo "Resultado da pesquisa Postgres: <br> <hr>";
                                $email = '%daniel%';
                                $select = 'SELECT * FROM usuario WHERE email like $1';
                                
                                if (pg_prepare($conexao_pg, '', $select)){
                                    if($resultado = pg_execute($conexao_pg, '', [$email])){
                                        while($linha = pg_fetch_assoc($resultado)){
                                            foreach ($linha as $campo => $valor) {
                                                echo " $campo : $valor <br>";
                                            }
                                            echo '<hr>';
                                        }
                                    }
                                }

                                pg_free_result($resultado);

                                echo "Conteudo do banco Postgres: <br> <hr>";
                                $consulta = "SELECT * FROM usuario";

                                if($resultado = pg_query($conexao_pg, $consulta)){
                                    while($linha = pg_fetch_assoc($resultado)){
                                        foreach ($linha as $campo => $dado) {
                                            echo "$campo : $dado <br>";
                                        }
                                        echo '<hr>';
                                    }
                                }
                                pg_close($conexao_pg);
                            ?>
                        </div>
                </div>

                </div>
                <div class="tab-pane fade" id="tabuada" role="tabpanel" aria-labelledby="tabuada-tab">
                <br>
                        <div class="card">

                        <div class="card-header">
                                Exemplo laços de repetição
                            </div>
                            
                            <div class="card-body">

                        <?php

                        $taboada = 0;

                        for ($i=0; $i <= 10 && $taboada <=10 ; $i++) { 

                            if( $i == 0 ){
                            echo "<h3> Taboada do número $taboada </h3>";
                            }
                            
                            echo "$taboada x $i = " .($taboada * $i). "<br>" ;
                            
                            if ($i === 10 ){
                                $i = 0;
                                $taboada++;
                                echo "<br>";
                                echo "<h3> Taboada do número $taboada </h3>";
                                echo "$taboada x $i = " .($taboada * $i). "<br>" ;
                            }

                        };

                        /* o
                        perador ternario 
                            var  =  ( condição ) ? verdadeiro : falso;
                        */

                        ?>
                          </div>
                </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            
            
            </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>