<?php
$senha = readline("Digite a Senha: ");
$senhacorreta = 1234;
$ativado = true;

while ($ativado) {
    if ($senha == $senhacorreta){
        echo "Sucesso!";
        $ativado = false;
    } else {
        $senha = readline("Digite a Senha: ");
    }
}

?>