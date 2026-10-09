<?php
$secreto = 42;

do {
    $tentativa = readline("Digite um número: ");
    
    if ($tentativa > $secreto) {
        echo "O número secreto é menor.\n";
    } elseif ($tentativa < $secreto) {
        echo "O número secreto é maior.\n";
    }
} while ($tentativa != $secreto);

echo "Parabéns! Você acertou!\n";
?>
