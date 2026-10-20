<?php
$alunos = 5;
$soma = 0;

for($i = 1; $i <= $alunos; $i ++){
    $nota = readline("Digite A {$i}° Nota: ");
    $soma += $nota;
}

$media = $soma / $alunos;
echo "A média da Turma foi ", $media;
?>