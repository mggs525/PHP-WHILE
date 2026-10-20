<?php
$total = 0;
for($i = 1; $i <=7;$i ++){
    $agua = readline("Digite quantos litros De água foi gasto no {$i}° Dia: ");
    $total += $agua;
}
echo "A quantidade de água consumida na semana foi: ", $total, " Litros.";
?>