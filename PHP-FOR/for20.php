<?php
$saque = readline("Digite o valor que deseja sacar: ");
$notas10 = 0;
$notas2 = 0;
$possivel = false;

for ($i = 0; $i <= $saque; $i += 10) {
    $resto = $saque - $i;
    if ($resto >= 0 && $resto % 2 == 0) {
        $notas10 = $i / 10;
        $notas2 = $resto / 2;
        $possivel = true;
    }
}

if ($possivel && $saque > 0) {
    echo "Notas de R$ 10,00: ", $notas10, "\n";
    echo "Notas de R$ 2,00: ", $notas2, "\n";
} else {
    echo "O saque não pode ser realizado com o valor exato.";
}
?>