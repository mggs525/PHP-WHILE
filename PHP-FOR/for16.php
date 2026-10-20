<?php
$somaPares = 0;
$somaImpares = 0;

for ($i = 1; $i <= 50; $i++) {
    if ($i % 2 == 0) {
        $somaPares += $i;
    } else {
        $somaImpares += $i;
    }
}

echo "A soma de todos os números pares é: " . $somaPares . "\n";
echo "A soma de todos os números ímpares é: " . $somaImpares . "\n";
?>