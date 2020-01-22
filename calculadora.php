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
        if( $taboada <= 10 ){
            echo "<h3> Taboada do número $taboada </h3>";
            }
    }

};