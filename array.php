<?php

function retornaImpar(array $num, $parametro){

    $parametro = strtoupper($parametro);

    switch ($parametro) {
        case 'P':
            foreach ($num as $a) {
               
                if( ($a % 2) === 0 ) {
                    echo "$a ";
                } 
            }
            break;
        case 'I':
            foreach ($num as $a) {

                if( ($a % 2) === 1) {
                    echo "$a ";
                }
            }
            break;
        
        default:
            echo "opcao invalida";
            break;
    }

}

echo "Numeros pares da lista:  ";
echo retornaImpar(range(0,50), "p");
echo "<br>";
echo "Numeros impares da lista:  ";
echo retornaImpar(range(0,50), "i");




































/* $alunos = [
    [
        'nome' => 'João',
        'notas' => [10, 8, 5]
    ],
    [
        'nome' => 'Maria',
        'notas' => [6, 5, 3]
    ],
    [
        'nome' => 'José',           
        'notas' => [9, 7, 4]
    ]
];
function calculaNotas(array $a)
{
    foreach ($a as $aluno) {
        $notas = $aluno['notas'];
        $media = ($notas[0] + $notas[1] + $notas[2])/3;
        $aluno['media'] = $media;
    }
}

function exibeNotas(array $b)
{
    foreach ($b as $aluno) {
    print("O aluno {$aluno['nome']} teve media {$aluno['media']}.<br>");
    }
}

echo calculaNotas($alunos);
echo exibeNotas($alunos); */




