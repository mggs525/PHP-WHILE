<?php
$qtdModelos = readline("Digite a quantidade de modelos de IA: ");
$qtdTestes = readline("Digite a quantidade de testes por modelo: ");

$maiorMedia = 0;
$melhorModelo = 0;

for ($i = 1; $i <= $qtdModelos; $i++) {
    $soma = 0;
    echo "\n--- Avaliação do Modelo {$i} ---\n";
    
    for ($j = 1; $j <= $qtdTestes; $j++) {
        $nota = floatval(readline("Digite a nota do teste {$j} (0 a 100): "));
        $soma += $nota;

        if ($nota < 50) {
            echo "Classificação do teste {$j}: Baixo\n";
        } elseif ($nota >= 50 && $nota <= 79) {
            echo "Classificação do teste {$j}: Moderado\n";
        } else {
            echo "Classificação do teste {$j}: Alto\n";
        }
    }

    $media = $soma / $qtdTestes;
    echo "Média de desempenho do Modelo {$i}: ", $media, "\n";

    if ($i == 1 || $media > $maiorMedia) {
        $maiorMedia = $media;
        $melhorModelo = $i;
    }
}

echo "\nO modelo que obteve a maior média de desempenho foi o Modelo {$melhorModelo}, com média ", $maiorMedia;
?>