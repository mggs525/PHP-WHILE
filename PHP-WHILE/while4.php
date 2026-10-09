<?php
$tab = readline("Digite Um Número de 1 a 10 Para Consultar a Tabuada: ");
$i = 1;
while($i <=10){
    $resultado = $tab * $i;
    echo $resultado,"\n";
    $i ++;
}
?>