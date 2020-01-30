<?php

require_once('./lib/config.php');
require_once('./lib/banco.php');

require('./head.php');

$paginas = [
    'login',
    'registro',
    'home'
];

if (isset($_GET['pagina']) && in_array($_GET['pagina'], $paginas)){
    $pagina = $_GET['pagina'];
}else{
    $pagina = 'login';
}

require_once("./paginas/{$pagina}.php");


require('./footer.php');

mysqli_close($conexao);

