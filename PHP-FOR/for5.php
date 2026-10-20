<?php
$tabuada = readline("Digite um Número Para Conferir a Tabuada: ");

for($i = 1; $i <=10; $i ++){
    $tb = $tabuada * $i;
    echo $tb . "\n";
}
