<?php
$total = 0;
for($i = 1; $i <=5;$i ++){
    $unidades = readline("Digite quantas unidades de produtos foram vendidas no {$i}° Dia: ");
    $total += $unidades;
}
echo "A quantidade de produtos vendidos nesses 5 dias foram: ", $total, " Unidades.";
?>