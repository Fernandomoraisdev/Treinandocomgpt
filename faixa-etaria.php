<?php
$idade = 36;

if($idade < 12){
    echo "voce ainda e uma crianca";
}elseif($idade >= 12 && $idade <= 17){
    echo "voce e um adolecente";
}elseif($idade >= 18 && $idade <= 59){
    echo "voce e um adulto";
}elseif($idade >= 60){
    echo "voce ja e um idoso";
}else{
    echo "voce nao se enquadra ";
    echo "em nenhuma dessas idades";
}