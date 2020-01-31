<?php

/*

Sexo
Altura
peso ideal
Homem (72.2 * altura) -58
Mulher (62.1 * altura) -44.7

*/

function peso_ideal(float $altura, string $sexo){

    if($sexo == "F"){
        return (62.1 * $altura) - 44.7;
    }elseif($sexo == "M"){
        return (72.2 * $altura) - 58;
    }else{
        return "Sexo invalido";
    }
}

function soma($a, $b){
    return $a + $b;    
}


function delta(int $a, int $b, int $c ){

    $delta = pow(-$b,2) - 4 * $a * $c;
    $x1 = (-$b + sqrt($delta))/2 * $a;
    $x2 = (-$b - sqrt($delta))/2 * $a;

    $resultado = Array((int)$delta, (int)$x1, (int)$x2);
    
    return $resultado;
}


/* 

delta = -b² -4 * a * c

x1 = (-b + raiz de delta) /2 *a

x2 = (-b - raiz de delta) /2 *a

exibir o valor de delta, x1 e x2

caso x1 e x2 seja iguais, informar

*/