<?php

$numero1 = 60;
$numero2 = 2;


if (
    
    > $numero2){
    echo "O numero1 $numero1 é maior que o numero2 $numero2 !!!!!";
}else{

    echo "O numero2 $numero2 é maior que o numero1 $numero1 !!!!!";
};

echo "<br>";
echo "<br>";

if( $numero1 % $numero2 == 0){
    echo "Resultado da divisao entre o numero1 e numero2 é par";
} else{
    echo "Resultado da divisao entre o numero1 e numero2 é impar";
}

echo "<br>";
echo "<br>";

if( $numero1 % $numero2 == 0 && $numero1 > 50 ){
    echo "Maior que 50 e o resultado da divisao entre o numero1 e numero2 é par";
} else{
    echo "Menor que 50 ou o resultado da divisao entre o numero1 e numero2 é impar";
}