<?php
$soma = 0;
do {
    $numero = readline("Digite um número (0 para sair): ");
    $soma += $numero;
} while ($numero != 0);

echo "A soma total dos valores informados é: $soma\n";