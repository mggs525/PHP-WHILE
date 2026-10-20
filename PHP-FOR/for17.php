<?php
$alunosddl = 0;
$alunosfdl = 0;
for($i = 1; $i <=12; $i ++){
    $falta = readline("Digite quantas faltas o Aluno {$i} tem: ");
    if($falta <=15){
        $alunosddl ++;
    } else {
        $alunosfdl ++;
    }
}

echo "Tem ", $alunosddl, " Alunos dentro do limite, e existem ", $alunosfdl, " Alunos fora do limite"
?>