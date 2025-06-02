<?php
$numero = 5;//numero que vai ser multiplicado
$contador = 1;//inicio do contador

while( $contador <= 10){/*verificacao enquanto o contador for menor ou
     igual a 10 pra continuar contando ate chegar a 10.*/

    $resultado = $numero * $contador;/*resultado esta multiplicando a
    variavel que tem o valor atribuido 5 pelo contador que tem o valor 1*/

    echo "$numero x $contador = $resultado\n";#echo esta imprimindo
    # o resultado dentro de aspas esta as variaveis a serem imprimidas
    #de forma que o PHP entenda que dentro da variavel $numero tem
    # o valor 5 e logo apos, temos o valor X como string para simbolizar
    # o sinal de vezes, e temos a variavel $contador que vale 1,
    # ou seja, comeca com 1 temos o sinal de igual (=).
    # e temos a variavel $resultado mostra o resultado da multiplicacao

    $contador++;#esse $contador++ acrescenta sempre +1 na multiplicacao
    # ate o resultado chegar em 10... 5x1 = 5, 5x2=10, 5x3=15 e assim vai
}