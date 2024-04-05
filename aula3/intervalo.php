<?php
function contar_pares_impares($inicio, $fim) {
    $pares = [];
    $impares = [];
    
    for ($num = $inicio; $num <= $fim; $num++) {
        if ($num % 2 == 0) {
            $pares[] = $num;
        } else {
            $impares[] = $num;
        }
    }
    
    echo "Números pares são $inicio  $fim: " . implode(', ', $pares) . "\n <br>";
    echo "Números ímpares são $inicio  $fim: " . implode(', ', $impares) . "\n";
}

// Exemplo de uso
$inicio = 25;
$fim = 60;
contar_pares_impares($inicio, $fim);
?>
