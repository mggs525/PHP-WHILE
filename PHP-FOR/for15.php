<?php
$total = 0;
$temps = [];
for($i = 1; $i <=7;$i ++){
    $temp = (float)readline("Digite qual foi a temperatura registrada no {$i}° Dia: ");
    $total += $temp;
    $temps[] = $temp;
}
    $media = $total / 7;
    echo "A média de temperatura nesses dias foi ", $media, " Graus, e o maior registrado foi de ", max($temps)
?>