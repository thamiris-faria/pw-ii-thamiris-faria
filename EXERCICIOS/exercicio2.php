<?php
function ContaPrimos($start, $end) {
    $count = 0;
    $numPrimos = []; // Lista para armazenar os números primos
    for ($num = $start; $num <= $end; $num++) {
        if (is_prime($num)) {
            $count++;
            $numPrimos[] = $num; // Adiciona o número primo à lista
        }
    }
    
    // Formatação dos números primos
    $formatted_primes = implode(', ', $numPrimos);
    
    return "O número de números primos entre $start e $end são $count ($formatted_primes).";
}

function is_prime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Exemplo de uso
$start = 3;
$end = 20;
$resultado = ContaPrimos($start, $end);
echo $resultado;
?>
