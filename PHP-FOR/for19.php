<?php
$frete = 0;
$pedido = 0;
$total = 0;
for($i = 1; $i <= 8; $i ++){
    $pedido = readline("Digite o preço do {$i}° pedido: ");
    $total += $pedido;
}
if($total >= 300){
    echo "O frete foi grátis, e o total foi ", $total, " Reais";
}elseif($total < 300 and $total >= 150){
    $frete = 15;
    $total += $frete;
    echo "O frete foi 15 Reais, e o total foi ", $total, " Reais";
}elseif($total < 150){
    $frete = 25;
    $total += $frete;
    echo "O frete foi 25 Reais, e o total foi ", $total, " Reais";
}
?>