<?php
$tabuada = 1;

while($tabuada <= 10){
    $multiplicador = 1;

    while($multiplicador <= 10){
        echo "$tabuada x $multiplicador = " . ($tabuada * $multiplicador) . "\n";
        $multiplicador++;
    }
    echo "\n";
    $tabuada++;
}