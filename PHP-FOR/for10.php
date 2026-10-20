<?php
$numero = readline("Digite Um Número: ");
$fatorial = 1;

for ($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
}

echo "O fatorial de $numero é: $fatorial";
?>