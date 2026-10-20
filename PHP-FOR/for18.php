<?php
$pequenos = 0;
$medios = 0;
$grandes = 0;

for ($i = 1; $i <= 10; $i++) {
    $peso = (float) readline("Digite o peso médio (em gramas) da fruta do lote {$i}: ");

    if ($peso < 100) {
        $pequenos++;
    } elseif ($peso >= 100 && $peso <= 200) {
        $medios++;
    } else {
        $grandes++;
    }
}
echo "Lotes pequenos (< 100g): " . $pequenos . "\n", " Lotes médios (100g a 200g): " . $medios . "\n", " Lotes grandes (> 200g): " . $grandes . "\n";
?>