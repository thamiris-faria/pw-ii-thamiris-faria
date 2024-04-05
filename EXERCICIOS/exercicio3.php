<?php
function verificar_situacao_aluno($nota1, $nota2) {
    // Calcula a média das notas
    $media = ($nota1 + $nota2) / 2;
    
    // Verifica a situação do aluno
    if ($media >= 6.0) {
        return "Aluno Aprovado";
    } elseif ($media >= 4.0) {
        return "Aluno em Recuperação";
    } else {
        return "Aluno Reprovado";
    }
}

// Exemplo de uso
$nota1 = 7.5;
$nota2 = 5.0;
$situacao = verificar_situacao_aluno($nota1, $nota2);
$media = ($nota1 + $nota2) / 2;
echo "A situação do aluno com notas $nota1 e $nota2 é: $media,  $situacao.";
?>
